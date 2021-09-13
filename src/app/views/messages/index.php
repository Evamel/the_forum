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
  
    <?php foreach($data['messages'] as $message):?>
    <div class="container-item">
    

     <div class="container user">
     <?php echo $message->message_by;?>

     </div>

     <p>
         <?php echo $message->message_content;?>
    </p>

     <h5>
         <?php echo 'posted on: ' . date('F j h:m', strtotime($message->message_date)) ?>
     </h5>
    </div>
    <?php if(isset($_SESSION['user_id']) && $_SESSION['user_id'] == $message->message_by): ?>
      <a class="btn orange" href="<?php echo URLROOT . "/messages/update/" . $message->message_id ?>">
         Update
     </a>
      <?php endif; ?>
    <?php endforeach;?>

    <?php if(isLoggedIn()): ?>
     <a class="btn green" href="<?php echo URLROOT;?>/messages/answer">
         Answer
     </a>
    <?php endif ?>

</div>

<?php
require APPROOT . '/views/includes/footer.php';
?>
</div>

