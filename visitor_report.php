<?php
include 'db.php';

?>

<html>

<head>

<title>Visitor Monthly Report</title>

<link rel="stylesheet" href="style.css">

</head>

<body>

<header>

<img src="assets/logo.png">

<h1>JOY CHRISTIAN FELLOWSHIP ONGATA RONGAI</h1>

</header>

<div class="container">

<h2>Visitor Monthly Report</h2>

<button onclick="window.print()" class="btn">Print Report</button>

<table>

<tr>
<th>Name</th>
<th>Phone</th>
<th>Visit Date</th>
</tr>

<?php

$result=mysqli_query($conn,"SELECT * FROM visitors");

while($row=mysqli_fetch_assoc($result)){

echo "<tr>

<td>".$row['name']."</td>

<td>".$row['phone']."</td>

<td>".$row['visit_date']."</td>

</tr>";

}

?>

</table>

</div>

</body>
</html>
