<?php
include("header.php");
include("config/db.php");

$members=mysqli_query($conn,"SELECT * FROM members");
$visitors=mysqli_query($conn,"SELECT * FROM visitors");
?>

<h3>Monthly Reports</h3>

<button onclick="window.print()">Print Report</button>

<h4>Members</h4>

<table>

<tr>
<th>Name</th>
<th>Phone</th>
</tr>

<?php while($row=mysqli_fetch_assoc($members)){ ?>

<tr>
<td><?php echo $row['name']; ?></td>
<td><?php echo $row['phone']; ?></td>
</tr>

<?php } ?>

</table>

<h4>Visitors</h4>

<table>

<tr>
<th>Name</th>
<th>Phone</th>
</tr>

<?php while($row=mysqli_fetch_assoc($visitors)){ ?>

<tr>
<td><?php echo $row['name']; ?></td>
<td><?php echo $row['phone']; ?></td>
</tr>

<?php } ?>

</table>

<?php include("menu.php"); ?>
