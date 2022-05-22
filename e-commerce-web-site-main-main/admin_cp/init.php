<?php
require('connect.php');
//routes
$tmp = '../includes/templates/'; //templates directory
$css = '../layout/css/'; //css directory
$js = '../layout/js/'; //js directory
$languages = '../includes/languages/'; // lang directory
$func = '../includes/functions/'; // function directory



$header='../header.php';

//include important links

include($func . 'functions.php');
include($languages . 'en.php'); // website language
include($tmp . 'header.php');
include('../header.php');
include('../Nav.php');


//Hide the nav bar if wanted
// if (!isset($noNav)) {
//     include($tmp . 'navbar.php');
// }
?>