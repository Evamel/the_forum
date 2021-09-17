<?php
class Topics extends Controller
{
  public function __construct()
  {
    $this->topicModel = $this->model('Topic');
  }

    public function index() {
       
        $topics = $this->topicModel->findAllTopics();
        $lastMessage =$this->topicModel->lastMessage();
        $topicAutor =$this->topicModel->findTopicAutor();
   

        $data = [
          'topics' => $topics,
          'lastMessage' =>$lastMessage,
          'topicAutor' =>$topicAutor
        ];
   
    $this->view('topics/index', $data);
  }

  public function create()
  {
    $id = $_GET['id'];
    if (!isLoggedIn()) {
      header("Location:" . URLROOT . "/topics/index?id=" . $_GET['id']);
    }

    $data = [
      'user_id' => $_SESSION['user_id'],
      'subject' => '',
      'board' => $id,
      'subjectError' => '',
    ];

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
      $data = [
        'user_id' => $_SESSION['user_id'],
        'subject' => trim($_POST['subject']),
        'board' => $id,
        'subjectError' => '',
      ];
      if (empty($data['subject'])) {
        $data['subjectError'] = 'your subject is empty';
      }
      if (empty($data['subjectError'])) {
        if ($this->topicModel->createTopic($data)) {
          header("Location:" . URLROOT . "/topics/index?id=" . $_GET['id']);
        } else {
          die("Something mew wrong, try again");
        }
      } else {
        $this->view('topics/create', $data);
      }
    }
    $this->view('topics/create', $data);
  }

  public function edit($id)
  {
    $topic = $this->topicModel->findTopicById($id);

    if (!isLoggedIn()) {
      header("Location:" . URLROOT . "/topics/index?id=" . $_GET['id']);
    } elseif ($topic->user_id != $_SESSION['user_id']) {
      header("Location:" . URLROOT . "/topics/index?id=" . $_GET['id']);
    }

    $data = [
      'topic' => $topic,
      'subject' => '',
      'subjectError' => '',

    ];

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
      $data = [
        'id' => $id,
        'topic' => $topic,
        'user_id' => $_SESSION['user_id'],
        'subject' => trim($_POST['subject']),
        'subjectError' => '',
      ];
      if (empty($data['subject'])) {
        $data['subjectError'] = 'your subject is empty';
      }
      if (empty($data['subjectError'])) {
        if ($this->topicModel->updateTopic($data)) {
          header("Location:" . URLROOT . "/topics/index.php?id=" . $topic->board_id);
        } else {
          die("Something mew wrong, try again");
        }
      } else {
        $this->view('topics/edit', $data);
      }
    }
    $this->view('topics/edit', $data);
  }




  public function delete($id)
  {
    $topic = $this->topicModel->findTopicById($id);

    if (!isLoggedIn()) {
      header("Location:" . URLROOT . "/topics/index?id=" . $_GET['id']);
    } elseif ($topic->user_id != $_SESSION['user_id']) {
      header("Location:" . URLROOT . "/topics/index?id=" . $_GET['id']);
    }

    $data = [
      'topic' => $topic,
      'subject' => '',
      'subjectError' => '',
    ];

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

      if ($this->topicModel->deleteTopic($id)) {
        header("Location:" . URLROOT . "/topics/index.php?id=" . $topic->board_id);
      } else {
        die('Something went wrong');
      }
    }
  }
}
