<?php
session_start();
$_SESSION['Fname'] = $_GET['FirstName'];
$_SESSION['Lname'] = $_GET['LastName'];
$_SESSION['Uname'] = $_GET['UserName'];
$_SESSION['Pass'] = $_GET['Password'];
// echo "sauj";
header("refresh: 0; url= data.php");
?>