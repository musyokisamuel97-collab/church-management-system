<?php
include("../header.php");
include("../config/db.php");

$members=mysqli_query($conn,"SELECT * FROM members");
?>

<h2>Monthly Report</h2>

<button onclick="window.print()">Print Report</button>

<table border="1">

<tr>
<th>Name</th>
<th>Phone</th>
<th>Department</th>
</tr>

<?php
while($row=mysqli_fetch_assoc($members)){
?>

<tr>

<td><?php echo $row['name']; ?></td>

<td><?php echo $row['phone']; ?></td>

<td><?php echo $row['department']; ?></td>

</tr>

<?php } ?>

</table>

<?php include("../menu.php"); ?>
