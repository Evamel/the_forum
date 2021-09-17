<header>

        <div class="log">
            <a href="<?php echo URLROOT; ?>/users/register">
                <i class="far fa-edit">                   
                </i> Register</a>

                <?php if (isset($_SESSION['user_id'])) : ?>

            <a href="<?php echo URLROOT; ?>/users/logout">
                <i class="fas fa-sign-in-alt">                   
                </i> Logout</a>

            <a href="<?php echo URLROOT; ?>/users/userprofile">
                <i class="fas fa-sign-in-alt">                   
                </i> Your profile</a>
            <?php else : ?>
                
            <a href="<?php echo URLROOT; ?>/users/login">
                <i class="fas fa-sign-in-alt">                   
                </i> Login</a>
                <?php endif; ?>
        </div>
        <h1>Cyber Cats</h1>   

    </header>

    <div class="container-fluid">
        <div class="path">
            <ul>
                <li><a href="<?php echo URLROOT; ?>/pages/index"><i class="fas fa-home"></i> Home </a></li>
                <li><a href="<?php echo URLROOT; ?>/boards/index">  < Board </a></li>
            </ul>
        </div>
