<?php
include("../config/db.php");

if(isset($_POST['save'])){

$name=$_POST['name'];
$phone=$_POST['phone'];
$department=$_POST['department'];
$date=$_POST['date'];

$conn->query("INSERT INTO members(name,phone,department,date_joined)
VALUES('$name','$phone','$department','$date')");

}

?>

<form method="post">

<input type="text" name="name" placeholder="Name">

<input type="text" name="phone" placeholder="Phone">

<input type="text" name="department" placeholder="Department">

<input type="date" name="date">

<button name="save">Save</button>

</form>
