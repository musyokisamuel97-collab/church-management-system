<?php
include("../config/db.php");

if(isset($_POST['save'])){
$name=$_POST['member_name'];
$date=$_POST['date'];

$conn->query("INSERT INTO attendance(member_name,service_date)
VALUES('$name','$date')");
}
?>

<h2>Attendance</h2>

<form method="post">
<input type="text" name="member_name" placeholder="Member name">
<input type="date" name="date">
<button name="save">Save</button>
</form>
