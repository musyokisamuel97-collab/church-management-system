<?php
include("../config/db.php");

if(isset($_POST['save'])){
$name=$_POST['member'];
$amount=$_POST['amount'];
$date=$_POST['date'];

$conn->query("INSERT INTO tithes(member_name,amount,date_given)
VALUES('$name','$amount','$date')");
}
?>

<h2>Tithes and Offerings</h2>

<form method="post">
<input type="text" name="member" placeholder="Member name">
<input type="number" name="amount" placeholder="Amount">
<input type="date" name="date">
<button name="save">Save</button>
</form>
