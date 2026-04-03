<?php
include("../config/db.php");
include("../includes/header.php");

$result=$conn->query("SELECT * FROM inventory");
?>

<h2>Church Inventory</h2>

<table border="1">

<tr>

<th>Item</th>
<th>Category</th>
<th>Quantity</th>

</tr>

<?php while($row=$result->fetch_assoc()){ ?>

<tr>

<td><?php echo $row['item_name']; ?></td>
<td><?php echo $row['category']; ?></td>
<td><?php echo $row['quantity']; ?></td>

</tr>

<?php } ?>

</table>
