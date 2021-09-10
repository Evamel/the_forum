<?php
// User profile
echo 'User Profile page';

foreach ($data['users'] as $user) {
    // echo "<li>" . $user->user_avatar . "</li>";
    echo "<ul><li>" . $user->user_name . "</li>";
    echo "<li>" . $user->user_email . "</li>";
    echo "<li>" . $user->user_date . "</li>";
    echo "<li>" . $user->user_signature . "</li>";
    echo "<li>" . ($user->user_level == 1 ? 'Admin' : 'Member') . "</li></ul>";
}
// 1 = Member. 2 = Moderator more permissions than member. 3 = Admin SUDO.
