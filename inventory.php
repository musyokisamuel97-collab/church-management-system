<?php
include("header.php");
include("config/db.php");

if(isset($_POST['add'])){

$name=$_POST['name'];
$department=$_POST['department'];
$quantity=$_POST['quantity'];

mysqli_query($conn,"INSERT INTO inventory(name,department,quantity)
VALUES('$name','$department','$quantity')");
}

$result=mysqli_query($conn,"SELECT * FROM inventory");
?>

<h3>Church Inventory</h3>

<form method="POST">

<input type="text" name="name" placeholder="Item Name" required>

<input type="text" name="department" placeholder="Department">

<input type="number" name="quantity" placeholder="Quantity">

<button name="add">Add Item</button>

</form>

<table>

<tr>
<th>Item</th>
<th>Department</th>
<th>Quantity</th>
</tr>

<?php while($row=mysqli_fetch_assoc($result)){ ?>

<tr>
<td><?php echo $row['name']; ?></td>
<td><?php echo $row['department']; ?></td>
<td><?php echo $row['quantity']; ?></td>
</tr>

<?php } ?>

</table>

<?php include("menu.php"); ?>
