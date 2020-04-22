<?php
ini_set('display_errors',1);
error_reporting(E_ALL);

//Require the autoload file
require_once ("vendor/autoload.php");
//instantiate the f3 Base class
$f3 = Base::instance();

//Default route
$f3->route('GET /',function(){
    echo "<h1>It is raining today</h1>";
});

//run f3
$f3->run();