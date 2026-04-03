<?php
session_start();

if(!isset($_SESSION['user'])){
header("Location: ../index.php");
}

$timeout=300;

if(isset($_SESSION['last_activity']) && (time()-$_SESSION['last_activity'])>$timeout){
session_unset();
session_destroy();
header("Location: ../index.php");
}

$_SESSION['last_activity']=time();
?>
