<?php
echo "create";
require_once("classes/main_class.php");
echo "das";
require_once("classes/removeAppl.php");
echo "yes";
$Add = new RA();
echo "create1";
if ($Add->issuccess() == true ) {
    // the user is logged in. you can do whatever you want here.
    // for demonstration purposes, we simply show the "you are logged in" view.
  		echo "SUCCESS";
    	include("Views/admin.php");
    //echo "\nYO";
  //  include("Views/logged.php");

}
else {
    // the user is not logged in. you can do whatever you want here.
    // for demonstration purposes, we simply show the "you are not logged in" view.
   // require("Views/not_login.php");
   echo "FAILED";
   include("Views/admin.php");
 //  if($_POST[''])
}

?>
