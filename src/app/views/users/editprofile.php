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

    <div class="container-login">
        <div class="wrapper-login">
            <h2>Your Profile</h2>
            <form action="<?php echo URLROOT; ?>/users/editprofile" method="POST">

                Your avatar :
                <input type="file" value="">
                <span class="invalidFeedback">
                    <?php echo $data['avatarError'] ?>
                </span>
                <br>
                Your kitty name:
                <input type="text" value="<?php echo $_SESSION['username'] ?>" name="username">
                <span class="invalidFeedback">
                    <?php echo $data['usernameError']; ?>
                </span>
                <br>
                Your email :
                <input type="email" value="<?php echo $_SESSION['email'] ?>" name="email">
                <span class="invalidFeedback">
                    <?php echo $data['emailError']; ?>
                </span>
                <br>
                Your signature :
                <br>
                <input type="text" value="<?php echo $_SESSION['signature'] ?>" name="signature">
                <span class="invalidFeedback">
                    <?php echo $data['signatureError']; ?>
                </span>
                <br>

                <button id="submit" type="submit" value="submit">
                    Edit Profile
                </button>

            </form>
        </div>
    </div>

    <?php
    require APPROOT . '/views/includes/footer.php';
    ?>
</div>