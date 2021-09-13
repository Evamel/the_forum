<div id="header">
    <h1>Cyber Cats</h1>
    <nav class="top-nav">
        <ul>
            <li class="btn-register">
                <a href="<?php echo URLROOT; ?>/users/register">Register</a>
            </li>
            <li class="btn-login">
                <?php if (isset($_SESSION['user_id'])) : ?>
                    <a href="<?php echo URLROOT; ?>/users/logout">Log out</a>
                <?php else : ?>
                    <a href="<?php echo URLROOT; ?>/users/login">Log in</a>
                <?php endif; ?>
            </li>

        </ul>

    </nav>
</div>