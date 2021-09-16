<?php
class Pages extends Controller {
    public function __construct(){
       $this->userModel = $this->model('User');
       $this->boardModel = $this->model('Board'); 
    }

    public function index() {
        $boards = $this->boardModel->getBoards();
        $sumTopics = $this->boardModel->sumTopics();
        $sumPosts = $this->boardModel->sumPosts();


        $lastMessages = [];

        foreach($boards as $board){
            array_push($lastMessages,$this->boardModel->lastPost($board->board_id)); 
        }

     

        $data = [
          'boards' => $boards,
          'sumTopics' => $sumTopics,
          'sumPosts' => $sumPosts,
          'lastMessages' => $lastMessages
         ];
        $this->view('pages/index', $data);
    }

  



    public function about() {
        $this->view('pages/about');
    }

    public function contact() {
        $this->view('pages/contact');
    }

    public function privacy() {
        $this->view('pages/privacy');
    }

    public function terms() {
        $this->view('pages/terms');
    }

    public function users(){
        $users = $this->userModel->getUsers();
        $data= [
            'title' => 'User page',
            'users' => $users
        ];
       $this->view('pages/users', $data);
    }

}