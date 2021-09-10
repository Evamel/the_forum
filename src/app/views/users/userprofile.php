<!-- User profile -->
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

    <?php
    // User profile
    $result = $_SESSION['date'];
    $date = date_create($row[0]);
    $defaultAvatar = "";
    $avatar = "https://www.gravatar.com/avatar/" . md5($_SESSION['email']) . "?s=64&d=mp";
    ?>
    <img src="<?php echo $avatar; ?>" alt="avatar" />
    <?php
    echo "<ul><li>" . $_SESSION['username'] . "</li>";
    echo "<li>" . $_SESSION['email'] . "</li>";
    echo "<li>" . date_format($date, 'd/m/y') . "</li>";
    echo "<li>" . $_SESSION['signature'] . "</li>";
    echo "<li>" . ($_SESSION['level'] == 2 ? 'Admin' : 'Member') . "</li></ul>";
    ?> <p class="edit">
        <a href="<?php echo URLROOT; ?>/users/editprofile">Edit your account</a>
    </p>
    <?php
    // 1 = Member. 2 = Moderator more permissions than member. 3 = Admin SUDO.
    ?>

    <?php
    require APPROOT . '/views/includes/footer.php';
    ?>
</div>