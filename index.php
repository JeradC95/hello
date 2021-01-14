<?php

//err reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

//require autoload
require_once('vendor/autoload.php');

//instantiate base class
$f3 = Base::instance();
$f3->set('DEBUG', 3);

//run fat free
$f3->run();



