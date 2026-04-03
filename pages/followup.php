if($_POST['status']=="Joined"){

$conn->query("INSERT INTO members(name,join_date,phone)
VALUES('$_POST[name]',CURDATE(),'$_POST[contact]')");

}
