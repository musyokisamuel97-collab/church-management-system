<?php
include 'db.php';

if(isset($_POST['add'])){

$name=$_POST['name'];
$phone=$_POST['phone'];

mysqli_query($conn,"INSERT INTO members(name,phone) VALUES('$name','$phone')");

}
?>

<header>
<img src="assets/logo.png">
<h1>JOY CHRISTIAN FELLOWSHIP ONGATA RONGAI</h1>
</header>

<div class="container">

<h2>Members</h2>

<form method="POST">

<input type="text" name="name" placeholder="Member Name">

<input type="text" name="phone" placeholder="Phone">

<button class="btn" name="add">Add Member</button>

</form>

</div>

<div class="footer-nav">

<a href="dashboard.php">Dashboard</a>
<a href="members.php">Members</a>
<a href="visitors.php">Visitors</a>
<a href="inventory.php">Inventory</a>
<a href="logout.php">Logout</a>

</div>
