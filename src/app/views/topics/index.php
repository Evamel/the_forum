<?php
require APPROOT . '/views/includes/head.php';
?>

<?php 
//var_dump($_SESSION);  

//var_dump($_GET['id']);  

//print_r($data['topics']);  
?>


<?php
require APPROOT . '/views/includes/navigation.php';
?>

<?php
require APPROOT . '/views/includes/right.php';
?>

  
      <h2>Liste topics</h2>
        <div class="rules">
            <p>Forum rules</p>
        </div>

        <div class="btnTopics">
        <?php if(isLoggedIn()): ?> 
            <button class="newTopic" href="<?php echo URLROOT . "/topics/create?id=" .$_GET['id'] ?>"> New topic<i class="fas fa-pen"></i></i></button>
            <?php endif ?>

            <div class="searchbarTopic">
                <form>
                    <input type="text" placeholder="Search.." name="search">
                    <button type="submit"><i class="fa fa-search"></i></button>
                    <button class="btnParam"><i class="fas fa-cog"></i></button>
                </form>
            </div>
        </div>
        <div class="blocAnnou">
        <section class="container-fluid announce">
            <div class="row announceTitre">
                <p class="col-md-8 name">Annoucements</p>
                <i class="col-md-1 fas fa-comments"></i>
                <i class="col-md-1 fas fa-eye"></i>
                <i class="col-md-2 far fa-clock"></i>
            </div>
            <div class="row announceText">
                <i class="col-md-3 fas fa-bullhorn"></i>
                <div class="col-md-4 textAnn">
                <p class="annouceText">This is a global announcement</p>
                <p class="annouceDetails"> by Carla in Unread forum</p>
                </div>
                <i class="col-md-1 fas fa-bullhorn"></i>
                <p class="col-md-1 numberOfMessages"></p>
                <p class="col-md-1 numberOfviews"></p>
                <p class="col-md-2 details">by</p>
            </div>
        </section>

        <section class="container-fluid topics">
     
            <div class="topicOne">
            <div class="row topicsTitres">
                <p class="col-md-8 nomTopic">Topics</p>
                <i class="col-md-1 fas fa-comments"></i>
                <i class="col-md-1 fas fa-eye"></i>
                <i class="col-md-2 far fa-clock"></i>
            </div>
            
            <div class="topicTwo">
            <?php foreach($data['topics'] as $key => $messages):?>
    <?php 
    $messagesCount =$data['messages'][$key];
    $lastMessage =$data['lastMessage'][$key];
    $topicAutor =$data['topicAutor'][$key];
    ?>
            <div class="row topicsText">
                <i class="col-md-3 fas fa-check"></i>
                <div class="col-md-4 infosTitre">
                <a class="topicTitre" href="<?php echo URLROOT . "/messages/index.php?id=" . $messages->topic_id ?>">
         <h2>
         <?php echo $messages->topic_subject;?>
         </h2>
        </a>
       
                <p class="topicInfo">by <div class="byName"> <?php echo 'Topic by: ' . $topicAutor->user_name;?></div></p>
                </div>
                <div class="col-md-1 icon"></div>
                <div class="col-md-1 numOfMess"> <?php echo 'Total messages: ' . $messages->count;?></div>
                <div class="col-md-1 numOfView">1945</div>
                <div class="col-md-2 time">by <div class="byName"><?php echo '<br> posted on: ' . date('j F Y H:i', strtotime($messages->message_date)) ?></div>
            </div>         
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
           
        </section>
    </div>



<?php
require APPROOT . '/views/includes/footer.php';
?>
