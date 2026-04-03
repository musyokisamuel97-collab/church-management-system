<?php
include("header.php");
include("config/db.php");

$members=mysqli_num_rows(mysqli_query($conn,"SELECT * FROM members"));
$visitors=mysqli_num_rows(mysqli_query($conn,"SELECT * FROM visitors"));
$inventory=mysqli_num_rows(mysqli_query($conn,"SELECT * FROM inventory"));
?>

<div class="dashboard">

<h3>Dashboard</h3>

<div class="card">Members: <?php echo $members; ?></div>
<div class="card">Visitors: <?php echo $visitors; ?></div>
<div class="card">Inventory Items: <?php echo $inventory; ?></div>

</div>

<?php include("menu.php"); ?>
