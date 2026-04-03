<?php
session_start();

if(!isset($_SESSION['user'])){
header("Location: ../login.php");
}

include("autologout.php");
?>

<link rel="stylesheet" href="../assets/style.css">

<header>

<img src="../assets/logo.png" class="logo">

<div>

<h2>JOY CHRISTIAN FELLOWSHIP ONGATA RONGAI</h2>
<p>CITY OF CHAMPIONS</p>

</div>

</header>

<nav>

<a href="../dashboard.php">Dashboard</a>
<a href="../members/members.php">Members</a>
<a href="../visitors/visitors.php">Visitors</a>
<a href="../attendance/attendance.php">Attendance</a>
<a href="../departments/departments.php">Departments</a>
<a href="../finance/tithes.php">Finance</a>
<a href="../inventory/inventory.php">Inventory</a>
<a href="../reports/reports.php">Reports</a>
<a href="../users/users.php">Users</a>
<a href="../logout.php">Logout</a>

</nav>
