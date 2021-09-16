<?php
require APPROOT . '/views/includes/head.php';
?>

<div id="section-landing">

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

    <div class="container">

        <?php foreach ($data['messages'] as $message) : ?>
            <div id="container-item">

                <div id="container-user">
                    <?php echo $message->user_name; ?>
                    <br>
                    <?php echo $message->user_signature; ?>
                </div>

                <p>
                    <?php echo $message->message_content; ?>
                </p>

                <h5>
                    <?php echo 'posted on: ' . date('F j h:m', strtotime($message->message_date)) ?>
                </h5>

                <?php if (isset($_SESSION['user_id']) && $_SESSION['user_id'] == $message->user_id) : ?>
                    <a class="btn orange" href="<?php echo URLROOT . "/messages/update/" . $message->message_id ?>">
                        Update
                    </a>
                    <form action="<?php echo URLROOT . "/messages/delete/" . $message->message_id ?>" method="POST">
                        <input type="submit" name="delete" value="Delete" class="btn red">
                    </form>
                <?php endif; ?>
            </div>

        <?php endforeach; ?>

        <?php if (isLoggedIn()) : ?>

            <a class="btn green" href="<?php echo URLROOT . "/messages/answer?id=" . $message->topic_id ?> ">
                NEW MESSAGE
            </a>

        <?php endif ?>

    </div>

    <?php
    require APPROOT . '/views/includes/footer.php';
    ?>
</div>