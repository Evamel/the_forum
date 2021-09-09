<?php
class Users extends Controller {
    public function __construct() {
        $this->userModel = $this->model('User');
    }

    public function register() {
        $data = [
         'username' => '',
         'email' => '',
         'password' => '',
         'confirmPassword' => '',
         'usernameError' => '',
         'emailError' => '',
         'passwordError' => '',
         'confirmPasswordError' => ''
               ];
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $data = [
                'username' => trim($data['username']),
                'email' => trim($data['email']),
                'password' => trim($data['password']),
                'confirmPassword' => '',
                'usernameError' => '',
                'emailError' => '',
                'passwordError' => '',
                'confirmPasswordError' => ''
                      ];

            $nameValidation = "/^[a-zA-Z0-9]*$/";
            //validate username
            if (empty($data['username'])) {
              $data['usernameError'] = 'Please enter your name =^w^=';
            } elseif (!preg_match($nameValidation, $data['username'])){
              $data['usernameError'] = 'A name with only letters and numbers =^w^=';
            }
            //validate email
            if (empty($data['email'])) {
                $data['emailError'] = 'Please enter your email =^w^=';
              } elseif (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
                $data['emailError'] = 'An email in correct format =^w^=';  
              } else {
                  //check existence of email
                  if ($this->userModel->findUserByEmail($data['email'])) { 
                    $data['emailError'] = 'That email already exists =^w^=';  
                  }
              }
            }
   

        $this->view('users/register', $data);
    }


    public function login() {
        $data = [
         'title' => 'Login page',
         'usernameError' => '',
         'passwordError' => ''       ];

       
        $this->view('users/login', $data);
    }
}