<?php
require APPROOT . '/views/includes/head.php';
?>

<div id="section-landing">
 
<?php 
//var_dump($_SESSION);  
?>
<?php 
//var_dump($_GET['id']);  
?>
<?php 
print_r($data['topics']);  

?>


<?php
require APPROOT . '/views/includes/navigation.php';
?>

<?php
require APPROOT . '/views/includes/right.php';
?>


<div class ="container">

     <?php if(isLoggedIn()): ?> 
     <a class="btn green" href="<?php echo URLROOT . "/topics/create?id=" .$_GET['id'] ?>">
         Create New Topic
     </a>
     <?php endif ?>
  
     <?php foreach($data['topics'] as $key => $messages):?>
    <?php 
    $messagesCount =$data['messages'][$key];
    $lastMessage =$data['lastMessage'][$key];
    $topicAutor =$data['topicAutor'][$key];
    ?>
  
    <div id="container-item">

    <a href="<?php echo URLROOT . "/messages/index.php?id=" . $messages->topic_id ?>">
         <h2>
         <?php echo $messages->topic_subject;?>
         </h2>
        </a>
       

                 <div id="container-user">  
                 <?php echo 'Topic by: ' . $topicAutor->user_name;?>
                 <br>
                 <?php echo 'Total messages: ' . $messages->count;?>
                 <br>    
               
                 <h5>
                  <?php echo 'last message by: ' . $messages->user_name . '<br> posted on: ' . date('F j h:m', strtotime($messages->message_date)) ?>
                 </h5>
                 </div>
                

       
      <?php if(isset($_SESSION['user_id']) && $_SESSION['user_id'] == $messages->user_id): ?>
      <a class="btn orange" href="<?php echo URLROOT . "/topics/edit/" . $messages->topic_id ?>">
         Update
      </a>
      <form action="<?php echo URLROOT . "/topics/delete/" . $messages->topic_id?>" method="POST">
      <input type="submit" name="delete" value="Delete" class ="btn red">
      </form>
      </div>
      <?php endif; ?>
      <?php endforeach;?>

  


</div>

<?php
require APPROOT . '/views/includes/footer.php';
?>


