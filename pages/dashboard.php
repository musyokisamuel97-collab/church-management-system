<?php include("../config/db.php"); ?>
<?php include("../includes/header.php"); ?>

<h3>Dashboard</h3>

<?php
$m=$conn->query("SELECT * FROM members")->num_rows;
$v=$conn->query("SELECT * FROM visitors")->num_rows;
$f=$conn->query("SELECT * FROM followup")->num_rows;
$i=$conn->query("SELECT * FROM inventory")->num_rows;
?>

<div class="cards">

<div class="card">Members: <?php echo $m ?></div>
<div class="card">Visitors: <?php echo $v ?></div>
<div class="card">Followup: <?php echo $f ?></div>
<div class="card">Inventory: <?php echo $i ?></div>

</div>

<?php include("../includes/footer.php"); ?>
