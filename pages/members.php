<?php include("../config/db.php"); ?>
<?php include("../includes/header.php"); ?>

<h3>Members</h3>

<form method="POST">

<input name="name" placeholder="Name">
<input name="join_date" type="date">
<input name="gender" placeholder="Gender">
<input name="status" placeholder="Status">
<input name="phone" placeholder="Phone">
<input name="department" placeholder="Department">

<button name="add">Add Member</button>

</form>

<?php

if(isset($_POST['add'])){

$conn->query("INSERT INTO members(name,join_date,gender,status,phone,department)
VALUES('$_POST[name]','$_POST[join_date]','$_POST[gender]','$_POST[status]','$_POST[phone]','$_POST[department]')");

}

$result=$conn->query("SELECT * FROM members");

while($row=$result->fetch_assoc()){
echo $row['name']." - ".$row['phone']."<br>";
}
?>

<?php include("../includes/footer.php"); ?>
