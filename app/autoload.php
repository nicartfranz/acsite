<?php
/* 
 * Contributor: Franz
 * Date Modified: May 9, 2020
 * 
 * Description: Auto Loader for the mvp core libraries, classes, config, helper functions
 */


//Configuration file
require_once 'config/config.php';
//Gen helper file
require_once 'helpers/gen.helpers.php';

//Auto Loader for the libraries and classes
spl_autoload_register(function($className){
    $className = str_replace("\\", DIRECTORY_SEPARATOR, $className);
    require_once 'libraries/' . $className . '.php';
});