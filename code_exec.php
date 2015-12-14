<?php
session_start();
include('connection.php');
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$gender=$_POST['mname'];
$xbl=$_POST['xbl'];
$username=$_POST['username'];
$pass=$_POST['pass'];
mysql_query("INSERT INTO member(fname, lname, mname, xbl, username, password)VALUES('$fname', '$lname', '$gender', '$xbl', '$username', '$pass')");
header("location: index.php?remarks=success");
mysql_close($con);
?>