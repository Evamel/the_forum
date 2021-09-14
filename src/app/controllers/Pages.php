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
        $lastPost = $this->boardModel->lastPostDate();

        $data = [
          'boards' => $boards,
          'sumTopics' =>$sumTopics,
          'sumPosts' =>$sumPosts,
          'lastPost' =>$lastPost
        ];
   
        $this->view('pages/index', $data);
    }

    public function about() {
        $this->view('pages/about');
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