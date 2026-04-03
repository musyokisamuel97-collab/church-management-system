<?php
session_start();
include("config/db.php");

if(!isset($_SESSION['user'])){
header("Location: login.php");
}
?>

<link rel="stylesheet" href="assets/style.css">

<header>

<img src="assets/logo.png" class="logo">

<div>
<h2>JOY CHRISTIAN FELLOWSHIP ONGATA RONGAI</h2>
<p>CITY OF CHAMPIONS</p>
</div>

</header>

<nav>

<a href="members/members.php">Members</a>
<a href="visitors/visitors.php">Visitors</a>
<a href="attendance/attendance.php">Attendance</a>
<a href="finance/tithes.php">Finance</a>
<a href="inventory/inventory.php">Inventory</a>
<a href="reports/reports.php">Reports</a>
<a href="users/users.php">Users</a>
<a href="logout.php">Logout</a>

</nav>

<h3>Church Statistics</h3>

<canvas id="chart"></canvas>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>

new Chart(document.getElementById("chart"),{

type:'bar',

data:{
labels:["Members","Visitors","Departments","Inventory"],
datasets:[{
label:"Church Data",
data:[50,15,8,20]
}]
}

});

</script>
