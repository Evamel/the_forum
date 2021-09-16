<?php
require APPROOT . '/views/includes/head.php';
?>

<div id="section-landing">
 
<?php
echo "<pre style='color:black'>";
//var_dump($_SESSION);  
print_r($data);  
echo "</pre>" ;
?>

<?php
require APPROOT . '/views/includes/navigation.php';
?>

<?php
require APPROOT . '/views/includes/right.php';
?>


<div class ="container">
    
  
    <?php foreach($data['boards'] as $key => $board):?>
    <?php 
    $topicsCount =$data['sumTopics'][$key];
    $messagesCount =$data['sumPosts'][$key];
    echo "<pre style='color:black'>";
    var_dump($data['lastPost'][$key]);
    echo "</pre>" ;
    ?>
    
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
                 <?php  echo 'Topics: ' . $topicsCount->topicTotal . '<br>';?>
                 </p>
                 <br> 
                 <p>  
                  <?php echo 'Messages: ' . $messagesCount->messageTotal . '<br>';?>
                  </p> 
                 <br>
                 <p>
                 <?php echo 'last post: ' . date('F j h:m', strtotime($board->board_id)) ?>
                 </p>
                 <br>
                 </div>
                 </div>
      <?php endforeach;?>

    


</div>

<?php
require APPROOT . '/views/includes/footer.php';
?>
</div>
