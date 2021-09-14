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
  
<div class="container-center">
    <h2> Update your answer </h2>
    <form action="<?php echo URLROOT; ?>/messages/update/<?php echo $data['message']->message_id?>" method="POST">
    <div class='form-item'>

        <textarea name="content" placeholder="Your answer" >
        <?php echo $data['message']->message_content ?>
        </textarea>

        <span class="invalidFeedback">
            <?php echo $data['contentError']; ?>
        </span>

    </div>
    <button class="btn-green" name="submit" type="submit">
    Submit
    </button>
</form>
</div>

<?php
require APPROOT . '/views/includes/footer.php';
?>
</div>

