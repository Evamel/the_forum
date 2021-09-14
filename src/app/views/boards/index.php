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
    
  
    <?php foreach($data['boards'] as $board):?>
    <div class="container-item">
    
        <a href="<?php echo URLROOT . "/topics/index/" . $boards->board_id ?>">
        <h2>
         <?php echo $board->board_name;?>
         </h2>
        </a>

         <p>
         <?php echo $board->board_description;?>
        </p>

        <div class="container-topics">
       
        </div>

                 <div class="container-infos">  
                 <?php echo $topics->total;?>
                 <br>    
                  <?php echo $messages->total;?>
                 <br>
                 <?php echo 'posted on: ' . date('F j h:m', strtotime($messages->last_topic_date)) ?>
                 <br>
                 </div>
      <?php endforeach;?>

    </div>


</div>

<?php
require APPROOT . '/views/includes/footer.php';
?>
</div>

