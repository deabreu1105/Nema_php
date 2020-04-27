<?php
include_once('utilidades.php');
//session_start();

var_dump($_SESSION['loggedin']); 
var_dump($_SESSION['userid']);
var_dump($_SESSION['username']); 
//unset ($SESSION['username']);

session_destroy();

header('Location: login.php');

?>