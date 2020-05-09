<?php

    //DB Params
    define('DB_HOST', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASS', '');
    define('DB_NAME', 'assessment_center');
    
    //APPROOT
    define('APPROOT', dirname(dirname(__FILE__)));

    //BASE_URL
    $base_url="http://".$_SERVER['SERVER_NAME'].dirname($_SERVER["REQUEST_URI"].'?').'/';
    define('BASE_URL', $base_url);

    //Site Name
    define('SITENAME', 'Assessment Center');