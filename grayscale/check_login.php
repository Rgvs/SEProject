<?php
//echo "create";
require_once("classes/main_class.php");
require_once("classes/Login.php");
$login = new login();
//echo "create1";
if ($login->isUserLoggedIn() != NULL ) {
    // the user is logged in. you can do whatever you want here.
    // for demonstration purposes, we simply show the "you are logged in" view.
  		$login=$_SESSION['user_type'];
  		echo "$login";
    if($login=="Administrator"){
    	include("Views/admin.php");
    }
    else if($login=="Counselor")
    {
	header("Location: ../counselor.php?mailid=as");
	exit;

	}
  	//echo "\nYO";
    //include("Views/logged.php");

} else {
    // the user is not logged in. you can do whatever you want here.
    // for demonstration purposes, we simply show the "you are not logged in" view.
    require("Views/not_login.php");
  //  echo "jad";
}

?>