<?php
class Messages extends Controller{
    public function __construct(){
       $this->messageModel = $this->model('Message'); 
    }


    public function index() {
        $messages = $this->messageModel->findAllMessages();

        $data = [
          'messages' => $messages
        ];

        $this->view('messages/index', $data);
    }



    public function answer(){
       if (!isLoggedIn()){
         header("Location:" . URLROOT . "/messages");
       }

      $data =[
         'user_id' =>$_SESSION['user_id'],
         'content' =>'',
         'contentError' => '',
      ];

      if($_SERVER['REQUEST_METHOD'] == 'POST'){
          $_POST = filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);
          $data =[
            'user_id' =>$_SESSION['user_id'],
            'content' =>trim($_POST['content']),
            'contentError' => '',
         ];
       if(empty($data['content'])){
           $data['contentError'] = 'your post is empty';
       }
       if(empty($data['contentError'])){
        if($this->messageModel->addMessage($data)){
            header("Location:" . URLROOT . "/messages");
        } else {
            die("Something mew wrong, try again");
        }
    }else {
        $this->view('messages/answer', $data);
    }
      }
      $this->view('messages/answer', $data);
    }





    public function update($message_id){
        $message =$this->messageModel->findMessageById($message_id);
       if(!isLoggedIn()){
            header("Location: " . URLROOT . "/messages");
       } elseif($message->message_by !=$_SESSION['user_id']) {

       }

     

      $data =[
        'message' => $message,

     ];

     $this->view('messages/update',$data);
    }

    public function delete(){

    }
}