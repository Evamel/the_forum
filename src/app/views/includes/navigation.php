<div id="header">
<h1>Cyber Cats</h1>
<nav class="top-nav">
    <ul>
    <li class="btn-register">
            <a href="<?php echo URLROOT;?>/users/register">Register</a>
        </li>
            <?php if(isset($_SESSION['user_id'])) :?>
            <li class="btn-logout">
            <a href="<?php echo URLROOT;?>/users/logout">Log out</a>
            </li>
            <li class="btn-profile">
            <a href="<?php echo URLROOT;?>/users/userprofile">Your profile</a>
            </li>
            <?php else : ?>
            <li class="btn-login">
            <a href="<?php echo URLROOT;?>/users/login">Log in</a>
            </li>
            <?php endif; ?>
     
        
    </ul>

</nav>
</div>