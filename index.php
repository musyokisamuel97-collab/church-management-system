<?php
session_start();
include("config/db.php");

if(isset($_POST['login'])){

$username=$_POST['username'];
$password=md5($_POST['password']);

$sql="SELECT * FROM users WHERE username='$username' AND password='$password'";
$result=$conn->query($sql);

if($result->num_rows>0){
$row=$result->fetch_assoc();
$_SESSION['user']=$row['username'];
$_SESSION['role']=$row['role'];
header("Location: pages/dashboard.php");
}else{
echo "Invalid login";
}
}
?>

<html>
<head>
<link rel="stylesheet" href="assets/style.css">
</head>

<body>

<div class="login-box">

<h2>JOY CHRISTIAN FELLOWSHIP<br>ONGATA RONGAI<br>CITY OF CHAMPIONS</h2>

<form method="POST">

<input type="text" name="username" placeholder="Username" required>

<input type="password" name="password" placeholder="Password" required>

<button name="login">Login</button>

</form>

</div>

</body>
</html>
