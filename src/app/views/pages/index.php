<?php
// Home Page
echo "You're on homepage.";
echo "<br>";

foreach ($data['users'] as $user) {
    echo " User : " . $user->user_name . " and user email : " . $user->user_email;
    echo "<br>";
}
// Need the four boards with 3 topics recently messaged.
// Need sign in
// Need sign up
// Need edit profile
// Need header and footer
