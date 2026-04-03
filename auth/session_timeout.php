<?php
session_start();

$timeout=300;

if(isset($_SESSION['LAST_ACTIVITY']) &&
(time()-$_SESSION['LAST_ACTIVITY'])>$timeout){

session_unset();
session_destroy();
header("Location: login.php");
exit();
}

$_SESSION['LAST_ACTIVITY']=time();

if(!isset($_SESSION['user'])){
header("Location: login.php");
exit();
}
?>
