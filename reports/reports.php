<?php
include("../config/db.php");
include("../includes/header.php");

$members=$conn->query("SELECT COUNT(*) as total FROM members")->fetch_assoc();
$visitors=$conn->query("SELECT COUNT(*) as total FROM visitors")->fetch_assoc();
?>

<h2>Church Reports</h2>

<p>Total Members: <?php echo $members['total']; ?></p>

<p>Total Visitors: <?php echo $visitors['total']; ?></p>

<button onclick="window.print()">Print Report</button>
