<?php
include("../config/db.php");

$result=$conn->query("SELECT * FROM members");
?>

<h2>Members</h2>

<a href="add_member.php">Add Member</a>

<table border="1">
<tr>
<th>Photo</th>
<th>Name</th>
<th>Phone</th>
<th>Department</th>
</tr>

<?php while($row=$result->fetch_assoc()){ ?>

<tr>
<td><img src="photos/<?php echo $row['photo']; ?>" width="60"></td>
<td><?php echo $row['name']; ?></td>
<td><?php echo $row['phone']; ?></td>
<td><?php echo $row['department']; ?></td>
</tr>

<?php } ?>

</table>
