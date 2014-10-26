<?php

#set errors reporting
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(-1);

date_default_timezone_set('America/New_York');

require_once('library/loader.class.php'); 
spl_autoload_register('library\\loader::load'); 

#$controller = new controller\index();
#load the twitter controller.
$controller = new controller\twitter(); 
