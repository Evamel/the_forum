<?php
declare(strict_types = 1);

class signInController
{
    public function sign_in()
    {
        // Usually, any required data is prepared here
        // For the home, we don't need to load anything

        // Load the view
        require '../app/View/sign_in.php';
    }
}