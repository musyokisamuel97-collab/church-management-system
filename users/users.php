<?php
include("../config/db.php");
include("../includes/header.php");

$result=$conn->query("SELECT * FROM users");
?>

<h2>System Users</h2>

<table border="1">

<tr>

<th>Username</th>
<th>Role</th>

</tr>

<?php while($row=$result->fetch_assoc()){ ?>

<tr>

<td><?php echo $row['username']; ?></td>
<td><?php echo $row['role']; ?></td>

</tr>

<?php } ?>

</table>
