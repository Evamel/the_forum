<?php
class Pages extends Controller
{
    public function __construct()
    {
        $this->userModel = $this->model('User');
        $this->boardModel = $this->model('Board');
        $this->messageModel = $this->model('Message');
        $this->topicModel = $this->model('Topic');
    }

    public function index()
    {
        $users = $this->userModel->getUsers();
        $data = [
            'title' => 'Home page',
            'users' => $users
        ];
        $this->view('pages/index', $data);
    }

    public function about()
    {
        $this->view('pages/about');
    }
    public function board()
    {
        $boards = $this->boardModel->getBoards();
        $data = [
            'title' => 'Boards',
            'boards' => $boards
        ];
        $this->view('pages/board', $data);
    }
    // public function message()
    // {
    //     $messages = $this->messageModel->getMessages();
    //     $data = [
    //         'title' => 'Messages',
    //         'messages' => $messages
    //     ];
    //     $this->view('pages/message', $data);
    // }
    // View message doesn't exist, do I need create one?
    public function topic()
    {
        $topics = $this->topicModel->getTopics();
        $data = [
            'title' => 'Topic',
            // 'content'=> 'Description'; ??
            'topics' => $topics
        ];
        $this->view('pages/topic', $data);
    }
    public function newTopic()
    {
        $newtopics = $this->topicModel->getTopics();
        $data = [
            'title' => 'Topic',
            'topics' => $newtopics
        ];
        $this->view('pages/newtopic', $data);
    }
    public function userProfile()
    {
        $userProfile = $this->userModel->getUsers();
        $data = [
            'title' => 'User Profile',
            'users' => $userProfile
        ];
        $this->view('pages/userprofile', $data);
    }
    public function users()
    {
        $users = $this->userModel->getUsers();
        $data = [
            'title' => 'Users List',
            'users' => $users
        ];
        $this->view('pages/users', $data);
    }
}
