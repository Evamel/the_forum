<?php
// Listes d'utilisateurs
echo 'Users page';

foreach ($data['users'] as $user) {
    echo "<ul><li>" . $user->user_name . "</li>";
    echo "<li>" . ($user->user_level == 1 ? 'Admin' : 'Member') . "</li>";
    echo "<li>" . $user->user_date . "</li></ul>";
}

// We'll delete the UL and LI tags.
