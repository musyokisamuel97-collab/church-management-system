<?php

session_start();

if(!isset($_SESSION['user'])){
header("Location: login.php");
}

function adminOnly(){

if($_SESSION['role']!="admin"){
die("Access denied");
}

}

function patronOnly(){

if($_SESSION['role']!="patron"){
die("Access denied");
}

}

?>
