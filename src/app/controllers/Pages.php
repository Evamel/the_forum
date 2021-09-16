<?php
class Pages extends Controller
{
    public function __construct()
    {
        $this->userModel = $this->model('User');
        $this->boardModel = $this->model('Board');
    }

    public function index()
    {
        $boards = $this->boardModel->getBoards();
        $sumTopics = $this->boardModel->sumTopics($boards);
        $sumPosts = $this->boardModel->sumPosts($boards);
        $lastPost = $this->boardModel->lastPostDate($boards);

        $data = [
            'boards' => $boards,
            'sumTopics' => $sumTopics,
            'sumPosts' => $sumPosts,
            'lastPost' => $lastPost
        ];

        //foreach ($result as $a => $a value){
        //$boardid = $_GET['id'];
        //$arrayOfResult = (array)$result[$a];
        //$this->db->query ...  
        //$messages => single()
        //}
        $this->view('pages/index', $data);
    }

    public function about()
    {
        $this->view('pages/about');
    }

    public function contact()
    {
        $this->view('pages/contact');
    }

    public function privacy()
    {
        $this->view('pages/privacy');
    }

    public function terms()
    {
        $this->view('pages/terms');
    }

    public function users()
    {
        $users = $this->userModel->getUsers();
        $data = [
            'title' => 'User page',
            'users' => $users
        ];
        $this->view('pages/users', $data);
    }
}
