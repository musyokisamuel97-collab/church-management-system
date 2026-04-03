<?php
include 'db.php';

if(isset($_POST['add'])){

$item=$_POST['item'];
$department=$_POST['department'];
$quantity=$_POST['quantity'];
$condition=$_POST['condition'];

mysqli_query($conn,"INSERT INTO inventory(item_name,department,quantity,item_condition)
VALUES('$item','$department','$quantity','$condition')");

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

<select name="department">

<option>Media Ministry</option>
<option>Technical</option>
<option>Church Office</option>
<option>Children Ministry</option>

</select>

<input type="number" name="quantity" placeholder="Quantity">

<select name="condition">

<option>Good</option>
<option>Needs Repair</option>
<option>Damaged</option>

</select>

<button class="btn" name="add">Add Item</button>

</form>

<h3>Inventory List</h3>

<table>

<tr>
<th>Item</th>
<th>Department</th>
<th>Quantity</th>
<th>Condition</th>
</tr>

<?php

$result=mysqli_query($conn,"SELECT * FROM inventory");

while($row=mysqli_fetch_assoc($result)){

echo "<tr>

<td>".$row['item_name']."</td>

<td>".$row['department']."</td>

<td>".$row['quantity']."</td>

<td>".$row['item_condition']."</td>

</tr>";

}

?>

</table>

</div>

<div class="footer-nav">

<a href="dashboard.php">Dashboard</a>
<a href="members.php">Members</a>
<a href="visitors.php">Visitors</a>
<a href="inventory.php">Inventory</a>
<a href="logout.php">Logout</a>

</div>
