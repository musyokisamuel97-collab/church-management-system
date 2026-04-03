<?php
session_start();
include("config/db.php");

if(!isset($_SESSION['user'])){
header("Location: login.php");
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Dashboard</title>
<link rel="stylesheet" href="assets/style.css">
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body>

<header>
<img src="assets/logo.png" class="logo">
<h2>JOY CHRISTIAN FELLOWSHIP ONGATA RONGAI - CITY OF CHAMPIONS</h2>
</header>

<nav>
<a href="members/members.php">Members</a>
<a href="visitors/visitors.php">Visitors</a>
<a href="attendance/attendance.php">Attendance</a>
<a href="finance/tithes.php">Tithes</a>
<a href="inventory/inventory.php">Inventory</a>
<a href="reports/reports.php">Reports</a>
<a href="users/users.php">Users</a>
<a href="logout.php">Logout</a>
</nav>

<h3>Visitor Statistics</h3>

<canvas id="visitorsChart"></canvas>

<script>
var ctx=document.getElementById('visitorsChart');

new Chart(ctx,{
type:'bar',
data:{
labels:["Week1","Week2","Week3","Week4"],
datasets:[{
label:"Visitors",
data:[12,19,8,15]
}]
}
});
</script>

</body>
</html>
