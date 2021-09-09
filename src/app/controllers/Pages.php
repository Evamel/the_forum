<?php
class Pages extends Controller {
    public function __construct(){
       $this->userModel = $this->model('User');
       $this->boardModel = $this->model('Board');
    }

    public function index() {
      
        $this->view('pages/index');
    }

    public function about() {
        $this->view('pages/about');
    }
    public function users(){
        $users = $this->userModel->getUsers();
        $data= [
            'title' => 'Home page',
            'users' => $users
        ];
       $this->view('pages/users', $data);
    }

    public function board() {
        $boards = $this->boardModel->getBoards();
        $data= [
            'title' => 'Home page',
            'boards' => $boards
        ];
        $this->view('pages/board', $data);
    }

}