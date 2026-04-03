<?php
include 'db.php';

if(isset($_POST['add'])){

$item=$_POST['item'];
$department=$_POST['department'];
$quantity=$_POST['quantity'];

mysqli_query($conn,"INSERT INTO inventory(item_name,department,quantity) VALUES('$item','$department','$quantity')");

}
?>

<header>
<img src="assets/logo.png">
<h1>JOY CHRISTIAN FELLOWSHIP ONGATA RONGAI</h1>
</header>

<div class="container">

<h2>Church Inventory</h2>

<form method="POST">

<input type="text" name="item" placeholder="Item Name">

<input type="text" name="department" placeholder="Department">

<input type="number" name="quantity" placeholder="Quantity">

<button class="btn" name="add">Add Item</button>

</form>

</div>

<div class="footer-nav">

<a href="dashboard.php">Dashboard</a>
<a href="members.php">Members</a>
<a href="visitors.php">Visitors</a>
<a href="inventory.php">Inventory</a>
<a href="logout.php">Logout</a>

</div>
