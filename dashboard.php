<?php
include 'db.php';

$members=mysqli_num_rows(mysqli_query($conn,"SELECT * FROM members"));
$visitors=mysqli_num_rows(mysqli_query($conn,"SELECT * FROM visitors"));
$items=mysqli_num_rows(mysqli_query($conn,"SELECT * FROM inventory"));
?>

<html>

<head>

<title>Dashboard</title>

<link rel="stylesheet" href="style.css">

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

</head>

<body>

<header>

<img src="assets/logo.png">

<h2>JOY CHRISTIAN FELLOWSHIP ONGATA RONGAI</h2>

</header>

<div class="sidebar">

<a href="dashboard.php">Dashboard</a>
<a href="members.php">Members</a>
<a href="visitors.php">Visitors</a>
<a href="followup.php">Follow Up</a>
<a href="inventory.php">Inventory</a>
<a href="users.php">Users</a>
<a href="visitor_report.php">Reports</a>
<a href="logout.php">Logout</a>

</div>

<div class="main">

<h2>Main Dashboard</h2>

<div class="card">

<h3>Total Members</h3>

<h2><?php echo $members; ?></h2>

</div>

<div class="card">

<h3>Total Visitors</h3>

<h2><?php echo $visitors; ?></h2>

</div>

<div class="card">

<h3>Church Items</h3>

<h2><?php echo $items; ?></h2>

</div>

<h3>Church Statistics</h3>

<canvas id="chart"></canvas>

<script>

var ctx=document.getElementById('chart').getContext('2d');

var chart=new Chart(ctx,{
type:'bar',
data:{
labels:['Members','Visitors','Items'],
datasets:[{
label:'Church Data',
data:[<?php echo $members;?>,<?php echo $visitors;?>,<?php echo $items;?>]
}]
}
});

</script>

</div>

<div class="footer-nav">

<a href="dashboard.php">Dashboard</a>
<a href="members.php">Members</a>
<a href="visitors.php">Visitors</a>
<a href="inventory.php">Inventory</a>

</div>

</body>

</html>
