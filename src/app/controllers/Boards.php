<?php
class Boards extends Controller{
    public function __construct(){
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
   

        $this->view('boards/index', $data);
    }
}