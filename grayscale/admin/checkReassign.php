<?php

require_once("../classes/MainClass.php");

$admin= new Administrator();

$mailidAppl=$_POST['mailidAppl'];
$mailidCouns=$_POST['mailidCouns'];
$res= $admin->reassign($mailidAppl,$mailidCouns);

if ($res == true ) 
{
    header("Location: admin.php");
}
else 
{
   header("Location: admin.php");
}

?>>