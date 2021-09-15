<?php
require APPROOT . '/views/includes/head.php';
?>

<div id="section-landing">
 
<?php 
var_dump($_SESSION);  
?>
<?php 
var_dump($_GET['$id']);  
?>

<?php
require APPROOT . '/views/includes/navigation.php';
?>

<?php
require APPROOT . '/views/includes/right.php';
?>


<div class ="container">

<?php
  
    echo 'Privacy'
    ?>
  
</div>
</div>

<?php
require APPROOT . '/views/includes/footer.php';
?>

