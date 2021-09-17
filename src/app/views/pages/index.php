<?php
require APPROOT . '/views/includes/head.php';
?>
 
<?php
//var_dump($_SESSION);  
//print_r($data);  
?>

<?php
require APPROOT . '/views/includes/navigation.php';
?>

<?php
require APPROOT . '/views/includes/right.php';
?>


    <h2>Category One</h2>
    <article class="categoryOne">
    <?php foreach($data['boards'] as $key => $board):?>
    <?php 
    $topicsCount =$data['sumTopics'][$key];
    $messagesCount =$data['sumPosts'][$key];
    $lastMessage =$data['lastMessages'][$key];  
    ?>
        <div class="card oneTop">
     
            <div class="row detTop">
            <img class="col-md-4 imgTop" src="/src/public/images/chat.jpg" alt="">
            <div class="col-md-8 TitleDescTop">
           
            <a href="<?php echo URLROOT . "/topics/index.php?id=" . $board->board_id ?>">
            <div class="titreTop">  <?php echo $board->board_name;?></div>
            </a>

            <div class="descTop"><?php echo $board->board_description;?></div>
            </div>
            </div>
            <div class="lineTop"></div>
            <div class="row numTop">
                <div class="col-md-4 topTop"> <?php  echo 'Topics: ' . $topicsCount->topicTotal . '<br>';?></div>
                <div class="col-md-4 postsTop">  <?php echo 'Messages: ' . $messagesCount->messageTotal . '<br>';?></div>
                <div class="col-md-4 dateTop">
                    <?php foreach($lastMessage as $message){
        $timestamp = strtotime($message->message_date);
        $newdate = date ("d/m/Y H:i", $timestamp);
        echo 'last post: ' . $newdate .'<br>';}?>
                  </div>
                 
            </div>             
        </div>
        <?php endforeach;?>   



    <!-- <h2>Category Two</h2>
    <article class="categoryTwo">
        <div class="card oneTop">
            <div class="row detTop">
            <img class="col-md-4 imgTop" src="/src/public/images/chat2" alt="">
            <div class="col-md-8 TitleDescTop">
            <div class="titreTop">Cats rules</div>
            <div class="descTop">This is where it beggins...</div>
            </div>
            </div>
            <div class="lineTop"></div>
            <div class="row numTop">
                <div class="col-md-4 topTop">456 topics</div>
                <div class="col-md-4 postsTop">203 posts</div>
                <div class="col-md-4 dateTop">Sun 29 Jun 6:30 pm</div>
            </div>
        </div>

        <div class="card twoTop">
            <div class="row detTop">
            <img class="col-md-4 imgTop" src="/src/public/images/chat2" alt="">
            <div class="col-md-8 TitleDescTop">
            <div class="titreTop">Cats rules</div>
            <div class="descTop">This is where it beggins...</div>
            </div>
            </div>
            <div class="lineTop"></div>
            <div class="row numTop">
                <div class="col-md-4 topTop">456 topics</div>
                <div class="col-md-4 postsTop">203 posts</div>
                <div class="col-md-4 dateTop">Sun 29 Jun 6:30 pm</div>
            </div>
        </div>
    </article>



    <h2>Category Three</h2>
    <article class="categoryThree">
        <div class="card oneTop">
            <div class="row detTop">
            <img class="col-md-4 imgTop" src="/src/public/images/chat3" alt="">
            <div class="col-md-8 TitleDescTop">
            <div class="titreTop">Cats rules</div>
            <div class="descTop">This is where it beggins...</div>
            </div>
            </div>
            <div class="lineTop"></div>
            <div class="row numTop">
                <div class="col-md-4 topTop">456 topics</div>
                <div class="col-md-4 postsTop">203 posts</div>
                <div class="col-md-4 dateTop">Sun 29 Jun 6:30 pm</div>
            </div>
        </div>

        <div class="card twoTop">
            <div class="row detTop">
            <img class="col-md-4 imgTop" src="/src/public/images/chat3" alt="">
            <div class="col-md-8 TitleDescTop">
            <div class="titreTop">Cats rules</div>
            <div class="descTop">This is where it beggins...</div>
            </div>
            </div>
            <div class="lineTop"></div>
            <div class="row numTop">
                <div class="col-md-4 topTop">456 topics</div>
                <div class="col-md-4 postsTop">203 posts</div>
                <div class="col-md-4 dateTop">Sun 29 Jun 6:30 pm</div>
            </div>
        </div>

        <div class="card threeTop">
            <div class="row detTop">
            <img class="col-md-4 imgTop" src="/src/public/images/chat3" alt="">
            <div class="col-md-8 TitleDescTop">
            <div class="titreTop">Cats rules</div>
            <div class="descTop">This is where it beggins...</div>
            </div>
            </div>
            <div class="lineTop"></div>
            <div class="row numTop">
                <div class="col-md-4 topTop">456 topics</div>
                <div class="col-md-4 postsTop">203 posts</div>
                <div class="col-md-4 dateTop">Sun 29 Jun 6:30 pm</div>
            </div>
        </div> -->
    </article>

<?php
require APPROOT . '/views/includes/footer.php';
?>