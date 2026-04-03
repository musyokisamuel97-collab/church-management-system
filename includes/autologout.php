<?php

$inactive = 300;

if(isset($_SESSION['timeout'])) {

$session_life = time() - $_SESSION['timeout'];

if($session_life > $inactive){

session_destroy();
header("Location: ../login.php");
}

}

$_SESSION['timeout'] = time();

?>
