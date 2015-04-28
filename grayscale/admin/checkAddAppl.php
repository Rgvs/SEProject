<?php

require_once("../classes/MainClass.php");

$admin= new Administrator();

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$mailid=$_POST['mailid'];
$password=$_POST['password'];
$mailidCouns=$_POST['mailidCouns'];

$res= $admin->addAppl($fname,$lname,$mailid,$password,$mailidCouns);

if ($res == true ) 
{sleep(2);
    header("Location: admin.php");
}
else 
{
   header("Location: admin.php");
}

?>
