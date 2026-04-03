<?php
$host="localhost";
$user="root";
$password="";
$db="church_db";

$conn=mysqli_connect($host,$user,$password,$db);

if(!$conn){
die("Connection failed");
}
?>
