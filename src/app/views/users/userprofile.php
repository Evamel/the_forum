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
    // $avatar = "https://www.gravatar.com/avatar/" . md5($_SESSION['email']) . "?s=64&d=mp";
    // echo '<img src=' . $avatar . '>';
    echo '<img src=' . $_SESSION['avatar'] . ' alt="avatar">';
    ?>

    <ul>
        <li><?php echo $_SESSION['username']; ?></li>
        <li><?php echo $_SESSION['email']; ?></li>
        <li><?php echo date_format($date, 'd/m/y'); ?></li>
        <li><?php
            if (empty($_SESSION['signature'])) {
                echo 'This is the default signature.';
            } else {
                echo $_SESSION['signature'];
            } ?></li>
        <li><?php
            if ($_SESSION['level'] == 3) {
                echo 'Administrator';
            } else if ($_SESSION['level'] == 2) {
                echo 'Moderator';
            } else if ($_SESSION['level'] == 1) {
                echo 'Member';
            }
            // 1 = Member. 2 = Moderator more permissions than member. 3 = Admin SUDO.
            ?></li>
    </ul>

    <p class="edit">
        <a href="<?php echo URLROOT; ?>/users/editprofile">Edit your account</a>
    </p>

    <?php
    require APPROOT . '/views/includes/footer.php';
    ?>
</div>