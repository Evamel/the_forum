<?php
require APPROOT . '/views/includes/head.php';
?>

<?php 
//var_dump($_SESSION);  
?>
<?php 
//var_dump($_GET['id']);  
?>
<?php 
//print_r($data['messages']); 
?>

<?php
require APPROOT . '/views/includes/navigation.php';
?>

<?php
require APPROOT . '/views/includes/right.php';
?>




<h2>Titre du topic</h2>

<div class="rules">
    <p>Forum rules</p>
</div>

<div class="btnMessages">
            <button class="reply"> Post reply <i class="fas fa-reply"></i></button>
            <button class="tool"><i class="fas fa-wrench"></i> <i class="fas fa-sort-down"></i></button>
            <div class="searchbarMessage">
                <form>
                    <input type="text" placeholder="Search.." name="search">
                    <button type="submit"><i class="fa fa-search"></i></button>
                    <button class="btnParam"><i class="fas fa-cog"></i></button>
                  </form>
            </div>
        </div>


<article class="container-fluid messages">
<?php foreach($data['messages'] as $message):
        $avatar = "https://www.gravatar.com/avatar/" . md5($_SESSION['email']) . "?s=64&d=mp";?>
    <div class="row message1">
        <div class="col-md-3 user">

        <img class="avatar" src="<?php  if (!empty($message->user_avatar)) {
        echo URLROOT . '/public/img/' . base64_decode($message->user_avatar);} 
        else { 
            echo $avatar;
        } ?>" alt="avatar" width="64" height="64">

            <p class="pseudo">  <?php echo $message->user_name;?></p>
            <p class="level">  <?php echo $message->user_level;?></p>
            <p class="numberOfPosts">Posts: <div class="num">457</div></p>
        </div>
        <div class="col-md-8 detailsMessage">
            <p class="date"><i class="far fa-clock"></i>  <?php echo 'posted on: ' . date('j F Y', strtotime($message->message_date)) ?></p>
            <p class="hour"> <?php date('H:i', strtotime($message->message_date)) ?></p>
            <p class="textMessage"> <?php echo $message->message_content;?></p>
            <div class="lineMessSign"></div>
            <p class="signatureMessage"><?php echo $message->user_signature;?></p>

        <?php if(isset($_SESSION['user_id']) && $_SESSION['user_id'] == $message->user_id): ?>
          <button class="reply" href="<?php echo URLROOT . "/messages/update/" . $message->message_id ?>">
         Post reply
         <i class="fas fa-reply"></i></button>
         <?php endif; ?>
        
        <?php if(isset($_SESSION['user_id']) && $_SESSION['user_id'] == $message->user_id): ?>
         <form action="<?php echo URLROOT . "/messages/delete/" . $message->message_id?>" method="POST">
         <input type="submit" name="delete" value="Delete" class ="reply">
         </form>

        <?php endif; ?>

        </div>
        <div class="col-md-1 quote">
            <i class="fas fa-quote-left"></i>
        </div>
    </div>

<?php endforeach;?>
</article>


<div class="btnMessageEnd"> 
   <?php if(isLoggedIn()): ?>
    <button class="reply" href="<?php echo URLROOT . "/messages/answer?id=" . $message->topic_id ?> "> Post reply <i class="fas fa-reply"></i></button>
    <?php endif ?>
    <button class="tool"> <i class="fas fa-wrench"></i> <i class="fas fa-sort-down"></i></button>
</div>

<div class="pathEnd">
    <a href="#">< Return to topics</a>

    <select name="jump" id="jumpTo">
        <option value="">Jump to</option>
        <option value="dog">fur</option>
        <option value="cat">Cat</option>
        <option value="hamster">Paws</option>
    </select>
</div>
<?php
require APPROOT . '/views/includes/footer.php';
?>


