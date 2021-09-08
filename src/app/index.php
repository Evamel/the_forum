<?php

declare(strict_types=1);

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

//include all your model files here

//include all your controllers here
require_once 'Controller/HomepageController.php';
require_once 'Controller/signUpController.php';
require_once 'Controller/signInController.php';

require_once 'config/config.php';


// Get the current page to load
// If nothing is specified, it will remain empty (home should be loaded)
$page = $_GET['page'] ?? null;

// Load the controller
// It will *control* the rest of the work to load the page
switch ($page) {
    
    case 'sign_up': 
        (new signUpController())->sign_up();
        break;
    
    case 'sign_in':
        (new signInController())->sign_in();
        break;

    case 'home':
    default:
        (new HomepageController())->index();
        break;
    
}
