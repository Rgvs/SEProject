<?php

require_once("../classes/MainClass.php");

$admin= new Administrator();

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$mailid=$_POST['mailid'];
$password=$_POST['password'];

$res= $admin->addCouns($fname,$lname,$mailid,$password);

if ($res == true ) 
{
    header("Location: admin.php");
}
else 
{
   header("Location: admin.php");
}

?>

