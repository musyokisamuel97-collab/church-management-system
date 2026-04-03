<?php
session_start();
include("../config/db.php");

if(isset($_POST['login'])){

$username=$_POST['username'];
$password=$_POST['password'];

$query=mysqli_query($conn,"SELECT * FROM users WHERE username='$username' AND password='$password'");

if(mysqli_num_rows($query)==1){

$_SESSION['user']=$username;
$_SESSION['LAST_ACTIVITY']=time();

header("Location: ../dashboard.php");
}
else{
$error="Invalid login details";
}

}
?>

<link rel="stylesheet" href="../style.css">

<div class="login-box">

<h2>JOY CHRISTIAN FELLOWSHIP ONGATA RONGAI</h2>
<p>CITY OF CHAMPIONS</p>

<form method="POST">

<input type="text" name="username" placeholder="Username" required>

<input type="password" name="password" placeholder="Password" required>

<button name="login">Login</button>

</form>

<?php if(isset($error)) echo $error; ?>

</div>
