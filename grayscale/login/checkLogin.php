<?php

require_once("../classes/MainClass.php");
require_once("../classes/LoginClass.php");
$login = new login();

//Check if user is logged in
if ($login->isUserLoggedIn() != NULL ) 
{
  	$user_type=$_SESSION['user_type'];
    if($user_type=="Administrator")
    {   
    	header("Location: ../admin/admin.php");
    }
    else if($user_type=="Counselor")
    {
    	header("Location: ../counselor/counselor.php");
    }
    else if($user_type=="Applicant")
    {
    	$appl= new Applicant();
       	$user_name = $_SESSION['user_name'];
       	$firstVisit = $appl->isfirst($user_name);
    	if($firstVisit==true)
        {
    		header("Location: ../applicant/firstTime.php");
    	} 	
    	else header("Location: ../applicant/applicant.php");
    }
} 
else
{
    header("Location: login.php");
}

?>
