<?php
include 'db.php';
session_start();

if(isset($_POST['login'])){

$username=$_POST['username'];
$password=$_POST['password'];

$query=mysqli_query($conn,"SELECT * FROM users WHERE username='$username' AND password='$password'");

if(mysqli_num_rows($query)>0){

$row=mysqli_fetch_assoc($query);

$_SESSION['role']=$row['role'];

header("Location:dashboard.php");

}else{

echo "Invalid login";

}

}

?>

<html>

<head>
<title>Login</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<header>

<img src="assets/logo.png">

<h1>JOY CHRISTIAN FELLOWSHIP ONGATA RONGAI</h1>

</header>

<div class="container">

<h2>Login</h2>

<form method="POST">

<input type="text" name="username" placeholder="Username" required><br><br>

<input type="password" name="password" placeholder="Password" required><br><br>

<button class="btn" name="login">Login</button>

</form>

</div>

</body>
</html>
