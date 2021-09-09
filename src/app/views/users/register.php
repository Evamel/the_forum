<?php
require APPROOT . '/views/includes/head.php';
?>

<div id="section-landing">
   
<?php
require APPROOT . '/views/includes/navigation.php';
?>

<div class="container-login">
   <div class="wrapper-login">
        <h2>Register</h2>
           <form action="<?php echo URLROOT; ?>/users/register" method="POST">
               <input type="text" placeholder="Username *" name="username">
               <span class="invalidFeedback">
                   <?php echo $data['emailError']; ?>
               </span>

               <input type="email" placeholder="Email *" name="email">
               <span class="invalidFeedback">
                   <?php echo $data['usernameError']; ?>
               </span>

               <input type="password" placeholder="Password *" name="confirmPassword">
               <span class="invalidFeedback">
                   <?php echo $data['confirmPasswordError']; ?>
               </span>

               <input type="password" placeholder="Confirm password *" name="password">
               <span class="invalidFeedback">
                   <?php echo $data['passwordError']; ?>
               </span>

               <button id="submit" type="submit" value="submit">
                Submit
               </button>
               
           </form>
    </div>
</div>

<?php
require APPROOT . '/views/includes/footer.php';
?>
</div>

