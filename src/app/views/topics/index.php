<?php
require APPROOT . '/views/includes/head.php';
?>

<div id="section-landing">
 
<?php 
var_dump($_SESSION);  
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
  
    <?php foreach($data['topics'] as $topic):?>
    <div class="container-item">
         <p>
         <?php echo $topic->topic_subject;?>
         </p>

                 <div class="container-user">   
                  <?php echo $topic->user_name;?>
                 <br>
                  <?php echo $messages->total;?>
                 <h5>
                  <?php echo 'posted on: ' . date('F j h:m', strtotime($topic->topic_date)) ?>
                 </h5>
                 </div>

      <?php if(isset($_SESSION['user_id']) && $_SESSION['user_id'] == $topic->user_id): ?>
      <a class="btn orange" href="<?php echo URLROOT . "/topics/edit/" . $topic->topic_id ?>">
         Update
      </a>
      <form action="<?php echo URLROOT . "/topics/delete/" . $topic->topic_id?>" method="POST">
      <input type="submit" name="delete" value="Delete" class ="btn red">
      </form>
      <?php endif; ?>
      <?php endforeach;?>

    </div>


</div>

<?php
require APPROOT . '/views/includes/footer.php';
?>
</div>

