<?php
include 'db.php';

if(isset($_POST['add'])){

$visitor=$_POST['visitor'];
$phone=$_POST['phone'];
$status=$_POST['status'];

mysqli_query($conn,"INSERT INTO followup(visitor_name,phone,status) VALUES('$visitor','$phone','$status')");

}
?>

<html>

<head>
<title>Visitor Follow Up</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<header>

<img src="assets/logo.png">

<h1>JOY CHRISTIAN FELLOWSHIP ONGATA RONGAI</h1>

</header>

<div class="container">

<h2>Visitor Follow Up</h2>

<form method="POST">

<input type="text" name="visitor" placeholder="Visitor Name">

<input type="text" name="phone" placeholder="Phone">

<select name="status">

<option>Not Contacted</option>
<option>Called</option>
<option>Visited</option>
<option>Joined Church</option>

</select>

<button class="btn" name="add">Save Follow Up</button>

</form>

<h3>Follow Up Records</h3>

<table>

<tr>
<th>Visitor</th>
<th>Phone</th>
<th>Status</th>
</tr>

<?php

$result=mysqli_query($conn,"SELECT * FROM followup");

while($row=mysqli_fetch_assoc($result)){

echo "<tr>

<td>".$row['visitor_name']."</td>

<td>".$row['phone']."</td>

<td>".$row['status']."</td>

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

</body>
</html>
