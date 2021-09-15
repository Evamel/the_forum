<?php
require APPROOT . '/views/includes/head.php';
?>

<div id="section-landing">
<<<<<<< HEAD
=======
 
<?php 
//var_dump($_SESSION);  
var_dump($data);  
?>
>>>>>>> Lisa

    <?php
    var_dump($_SESSION);
    ?>

    <?php
    require APPROOT . '/views/includes/navigation.php';
    ?>

<<<<<<< HEAD
    <?php
    require APPROOT . '/views/includes/right.php';
    ?>

    <?php
    require APPROOT . '/views/includes/footer.php';
    ?>
</div>

<!-- // Need edit profile -->
<!-- // Need the four boards with 3 topics recently messaged. -->
=======

<div class ="container">
    
  
    <?php foreach($data['boards'] as $board):?>
    <div id="container-item">
    
        <a href="<?php echo URLROOT . "/topics/index.php?id=" . $board->board_id ?>">
        <h2>
         <?php echo $board->board_name;?>
         </h2>
        </a>

         <p>
         <?php echo $board->board_description;?>
        </p>

        <div id="container-topics">
       
        </div>

                 <div id="container-infos">  
                 <p>
                 <?php echo $result->topicTotal;?>
                 </p>
                 <br>    
                  <?php echo $messages->total;?>
                 <br>
                 <?php echo 'last post: ' . date('F j h:m', strtotime($board->board_id)) ?>
                 <br>
                 </div>
                 </div>
      <?php endforeach;?>

    


</div>

<?php
require APPROOT . '/views/includes/footer.php';
?>
</div>
>>>>>>> Lisa
