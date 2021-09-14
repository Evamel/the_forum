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
//var_dump($data['topics']);  
//var_dump(str_split($_GET['id']));
?>


<?php
require APPROOT . '/views/includes/navigation.php';
?>

<?php
require APPROOT . '/views/includes/right.php';
?>


<div class ="container">

     <?php if(isLoggedIn()): ?> 
     <a class="btn green" href="<?php echo URLROOT;?>/topics/create">
         Create New Topic
     </a>
     <?php endif ?>
  
    <?php foreach($data['messages'] as $messages):?>
    <div id="container-item">

    <a href="<?php echo URLROOT . "/messages/index.php?id=" . $messages->topic_id ?>">
         <h2>
         <?php echo $messages->topic_subject;?>
         </h2>
        </a>
       

                 <div id="container-user">  
                 <?php echo $messages->total;?>
                 <br>    
                  <?php echo $messages->user_name;?>
                 <br>
                 <h5>
                  <?php echo 'posted on: ' . date('F j h:m', strtotime($messages->topic_date)) ?>
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


