<?php
class Users extends Controller
{
    public function __construct()
    {
        $this->userModel = $this->model('User');
    }

    public function userProfile()
    {
        $this->view('users/userprofile');
    }

    public function editProfile()
    {
        $data = [
            'id' => '',
            'username' => '',
            'email' => '',
            'signature' => '',
            'avatar' => '',
            'usernameError' => '',
            'emailError' => '',
            'signatureError' => '',
        ];

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $data = [
                'id' => $_SESSION['user_id'],
                'username' => trim($_POST['username']),
                'email' => trim($_POST['email']),
                'signature' => trim($_POST['signature']),
                'avatar' => base64_encode($_POST['avatar']),
                'usernameError' => '',
                'emailError' => '',
                'signatureError' => '',
            ];
            //regex avec uniquement les chiffres et les lettres              
            $nameValidation = "/^[a-zA-Z0-9]*$/";
            //regex avec les - les espaces et les . 
            $signatureValidation = "/^[-a-zA-Z0-9 .]+$/";
            //validate username
            if (empty($data['username'])) {
                $data['usernameError'] = 'Please enter your name =^w^=';
            } elseif (!preg_match($nameValidation, $data['username'])) {
                $data['usernameError'] = 'A name with only letters and numbers =^o^=';
            }
            //validate email
            if (empty($data['email'])) {
                $data['emailError'] = 'Please enter your email =^w^=';
            } elseif (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
                $data['emailError'] = 'An email in correct format =^o^=';
            } else {
                //check existence of email
                if ($this->userModel->findUserByEmail($data['email'])) {
                    $data['emailError'] = 'That email already exists =^v^=';
                }
            }

            //validate username
            if (!preg_match($signatureValidation, $data['signature'])) {
                $data['signatureError'] = 'A signature can only contain letters and numbers =^o^=';
            }

            //confirm errors are empty
            if (empty($data['usernameError']) && empty($data['emailError']) && empty($data['signatureError'])) {
                if ($this->userModel->edit($data)) {
                    //redirect to login page
                    header('location: ' . URLROOT . '/pages/index');
                } else {
                    die('Something went wrong =^o^=');
                }
            }
        }
        $this->view('users/editprofile', $data);
    }

    public function register()
    {
        $data = [
            'username' => '',
            'email' => '',
            'password' => '',
            'confirmPassword' => '',
            'avatar' => '',
            'usernameError' => '',
            'emailError' => '',
            'passwordError' => '',
            'confirmPasswordError' => ''
        ];
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $data = [
                'username' => trim($_POST['username']),
                'email' => trim($_POST['email']),
                'password' => trim($_POST['password']),
                'confirmPassword' => trim($_POST['confirmPassword']),
                'avatar' => "https://www.gravatar.com/avatar/" . md5(trim($_POST['email'])) . "?s=64&d=mp",
                'usernameError' => '',
                'emailError' => '',
                'passwordError' => '',
                'confirmPasswordError' => ''
            ];

            $nameValidation = "/^[a-zA-Z0-9]*$/";
            $passwordValidation = "/^(.{0,7}|[^a-z]*|[^\d]*)$/i";
            //validate username
            if (empty($data['username'])) {
                $data['usernameError'] = 'Please enter your name =^w^=';
            } elseif (!preg_match($nameValidation, $data['username'])) {
                $data['usernameError'] = 'A name with only letters and numbers =^o^=';
            }
            //validate email
            if (empty($data['email'])) {
                $data['emailError'] = 'Please enter your email =^w^=';
            } elseif (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
                $data['emailError'] = 'An email in correct format =^o^=';
            } else {
                //check existence of email
                if ($this->userModel->findUserByEmail($data['email'])) {
                    $data['emailError'] = 'That email already exists =^v^=';
                }
            }
            //validate length and numbers of password
            if (empty($data['password'])) {
                $data['passwordError'] = 'Enter a password =^w^=';
            } elseif (strlen($data['password']) < 6) {
                $data['passwordError'] = 'Enter a password with at least 8 characters =^o^=';
            } elseif (preg_match($passwordValidation, $data['password'])) {
                $data['passwordError'] = 'Enter a password with at least 1 number =^o^=';
            }
            //validate confirm password
            if (empty($data['confirmPassword'])) {
                $data['confirmPasswordError'] = 'Enter password =^w^=';
            } else {
                if ($data['password'] != $data['confirmPassword']) {
                    $data['confirmPasswordError'] = 'Not matching passwords =^o^=';
                }
            }

            //confirm errors are empty
            if (empty($data['usernameError']) && empty($data['emailError']) && empty($data['passwordError']) && empty($data['confirmPasswordError'])) {
                $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
                if ($this->userModel->register($data)) {
                    //redirect to login page
                    header('location: ' . URLROOT . '/users/login');
                } else {
                    die('Something went wrong =^o^=');
                }
            }
        }
        $this->view('users/register', $data);
    }

    public function login()
    {
        $data = [
            'title' => 'Login page',
            'username' => '',
            'password' => '',
            'usernameError' => '',
            'passwordError' => ''
        ];

        //check post
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'username' => trim($_POST['username']),
                'password' => trim($_POST['password']),
                'usernameError' => '',
                'passwordError' => '',
            ];

            if (empty($data['username'])) {
                $data['usernameError'] = 'Please enter your name =^w^=';
            }

            if (empty($data['password'])) {
                $data['passwordError'] = 'Please enter your password =^w^=';
            }

            if (empty($data['usernameError']) && empty($data['passwordError'])) {
                $loggedInUser = $this->userModel->login($data['username'], $data['password']);
                if ($loggedInUser) {
                    $this->createUserSession($loggedInUser);
                } else {
                    $data['passwordError'] = 'Incorrect password or username =^o^=';
                    $this->view('users/login', $data);
                }
            }
        } else {
            $data = [
                'username' => '',
                'password' => '',
                'usernameError' => '',
                'passwordError' => ''
            ];
        }
        $this->view('users/login', $data);
    }

    public function createUserSession($user)
    {
        $_SESSION['user_id'] = $user->user_id;
        $_SESSION['username'] = $user->user_name;
        $_SESSION['email'] = $user->user_email;
        $_SESSION['date'] = $user->user_date;
        $_SESSION['signature'] = $user->user_signature;
        $_SESSION['level'] = $user->user_level;
        $_SESSION['avatar'] = $user->user_avatar;
        header('location:' . URLROOT . '/users/userprofile');
    }

    public function logout()
    {
        unset($_SESSION['user_id']);
        unset($_SESSION['username']);
        unset($_SESSION['email']);
        unset($_SESSION['date']);
        unset($_SESSION['signature']);
        unset($_SESSION['level']);
        unset($_SESSION['avatar']);
        header('location:' . URLROOT . '/users/login');
    }
}
