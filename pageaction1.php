<?php

include './pdbcon.php';
session_start();

$username=$_POST['username'];
$password=$_POST['password'];

$_SESSION['name'] = $_POST['username'];

$sql="select * from data where username='$username' and password='$password'";
$records=$con->query($sql);
if($records->num_rows>0)
{
    header('location:page2.php');
}
else
{
    $_SESSION['status']="Incorrect username or password. Try again.";
    header('location:index.php');
}
?>