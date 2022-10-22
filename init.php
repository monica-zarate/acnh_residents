<?php 

    // The constants and files placed on this init file will be accessed trought the application, we use require_once to avoid conflicts when different locations across the application need to reference the same file, like our functions file and our classes.

    // Constants
    define('WWW_ROOT', 'localhost');
    define('PROJECT_ROOT', dirname(__FILE__));

    // Functions
    require_once('functions.php');

    // Classes
    require_once(get_project_path('/Classes/Resident.php'));
    require_once(get_project_path('/Classes/Villager.php'));
    require_once(get_project_path('/Classes/Npc.php'));
