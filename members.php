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

<h2>JOY CHRISTIAN FELLOWSHIP ONGATA RONGAI</h2>

</header>

<div class="main">

<h2>Members</h2>

<form method="POST">

<input type="text" name="name" placeholder="Member Name">

<input type="text" name="phone" placeholder="Phone">

<button class="btn" name="add">Add Member</button>

</form>

<table>

<tr>

<th>Name</th>
<th>Phone</th>

</tr>

<?php

$result=mysqli_query($conn,"SELECT * FROM members");

while($row=mysqli_fetch_assoc($result)){

echo "<tr>

<td>".$row['name']."</td>

<td>".$row['phone']."</td>

</tr>";

}

?>

</table>

</div>
