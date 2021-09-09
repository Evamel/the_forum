<!-- Home Page -->
<?php
foreach ($data['users'] as $user) {
   echo " Users:" . $user->user_name . " " . $user->user_email;
   echo "<br>";
}
?>