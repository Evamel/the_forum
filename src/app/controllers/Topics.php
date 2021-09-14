<?php
class Topics extends Controller{
    public function __construct(){
       $this->topicModel = $this->model('Topic'); 
    }


    public function index() {
        $board_id = $_GET['board_id'];
        $topics = $this->topicModel->findAllTopics();
        $messages = $this->topicModel->messagesByTopic($board_id);
   

        $data = [
          'topics' => $topics,
          'messages' => $messages
        ];
   

        $this->view('topics/index', $data);
    }



    public function create(){
       if (!isLoggedIn()){
         header("Location:" . URLROOT . "/topics");
       }

      $data =[
         'user_id' =>$_SESSION['user_id'],
         'subject' =>'',
         'board' =>'',
         'subjectError' => '',
      ];

      if($_SERVER['REQUEST_METHOD'] == 'POST'){
          $_POST = filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);
          $data =[
            'user_id' =>$_SESSION['user_id'],
            'subject' =>trim($_POST['subject']),
            'board' => 3,
            'subjectError' => '',
         ];
       if(empty($data['subject'])){
           $data['subjectError'] = 'your subject is empty';
       }
       if(empty($data['subjectError'])){
        if($this->topicModel->createTopic($data)){
            header("Location:" . URLROOT . "/topics");
        } else {
            die("Something mew wrong, try again");
        }
    }else {
        $this->view('topics/create', $data);
    }
      }
      $this->view('topics/create', $data);
    }





    public function edit($id) {
        
        $topic =$this->topicModel->findTopicById($id);

       if(!isLoggedIn()){
            header("Location: " . URLROOT . "/topics");
       } elseif($topic->user_id !=$_SESSION['user_id']) {
        header("Location: " . URLROOT . "/topics");
       }

    
      $data =[
        'topic' => $topic,
        'subject' =>'',
        'subjectError' => '',

     ];

     if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $_POST = filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);
        $data =[
          'id' => $id,
          'topic' => $topic,
          'user_id' =>$_SESSION['user_id'],
          'subject' =>trim($_POST['subject']),
          'subjectError' => '',
       ];
     if(empty($data['subject'])){
         $data['subjectError'] = 'your subject is empty';
     }
     if(empty($data['subjectError'])){
      if($this->topicModel->updateTopic($data)){
          header("Location:" . URLROOT . "/topics");
      } else {
          die("Something mew wrong, try again");
      }
  }else {
      $this->view('topics/edit', $data);
  }
    }
    $this->view('topics/edit', $data);
  }
     



    public function delete($id){
        $topic =$this->topicModel->findTopicById($id);

        if(!isLoggedIn()){
             header("Location: " . URLROOT . "/topics");
        } elseif($topic->user_id !=$_SESSION['user_id']) {
         header("Location: " . URLROOT . "/topics");
        }
 
     
       $data =[
        'topic' => $topic,
        'subject' =>'',
        'subjectError' => '',
 
      ];

      if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $_POST = filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);
        
        if($this->topicModel->deleteTopic($id)){
            header("Location:" . URLROOT . "/topics");
        } else {
           die('Something went wrong');
        }
    }

    }

}