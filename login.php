<?php
session_start();
include "includes/db.php";

if(isset($_POST['login'])){
    
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn,$query);

    if(mysqli_num_rows($result) > 0){
        $_SESSION['user']=$username;
        header("Location: dashboard.php");
    }else{
        $error = "Invalid login details";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<style>

body{
    font-family: Arial;
    background:#f2f2f2;
}

.login-box{
    width:350px;
    margin:120px auto;
    background:white;
    padding:30px;
    text-align:center;
    border-radius:10px;
}

input{
    width:90%;
    padding:10px;
    margin:10px;
}

button{
    padding:10px 20px;
    background:#2c3e50;
    color:white;
    border:none;
}

</style>
</head>

<body>

<div class="login-box">

<h2>JOY CHRISTIAN FELLOWSHIP</h2>
<h4>ONGATA RONGAI - CITY OF CHAMPIONS</h4>

<form method="POST">

<input type="text" name="username" placeholder="Username" required>

<input type="password" name="password" placeholder="Password" required>

<button name="login">Login</button>

</form>

<?php
if(isset($error)){
echo "<p style='color:red;'>$error</p>";
}
?>

</div>

</body>
</html>
