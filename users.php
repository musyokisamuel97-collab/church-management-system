<?php
include 'db.php';

if(isset($_POST['add'])){

$username=$_POST['username'];
$password=$_POST['password'];
$role=$_POST['role'];

mysqli_query($conn,"INSERT INTO users(username,password,role) VALUES('$username','$password','$role')");

}
?>

<header>
<img src="assets/logo.png">
<h1>JOY CHRISTIAN FELLOWSHIP ONGATA RONGAI</h1>
</header>

<div class="container">

<h2>User Management</h2>

<form method="POST">

<input type="text" name="username" placeholder="Username">

<input type="password" name="password" placeholder="Password">

<select name="role">

<option value="admin">Admin</option>
<option value="patron">Patron</option>

</select>

<button class="btn" name="add">Add User</button>

</form>

</div>

<div class="footer-nav">

<a href="dashboard.php">Dashboard</a>
<a href="members.php">Members</a>
<a href="visitors.php">Visitors</a>
<a href="inventory.php">Inventory</a>
<a href="logout.php">Logout</a>

</div>
