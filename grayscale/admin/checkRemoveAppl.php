<?php

require_once("../classes/MainClass.php");

$admin= new Administrator();

$mailid=$_POST['mailid'];
$res= $admin->removeAppl($mailid);

if ($res == true ) 
{
    header("Location: admin.php");
}
else 
{
   header("Location: admin.php");
}

?>>
