<?php

 require_once("classes/main_class.php");

class login
{
     public $errors = array();
   
    public function __construct()
    {
        // create/read session, absolutely necessary
        session_start();

        // check the possible login actions:
        // if user tried to log out (happen when user clicks logout button)
        if (isset($_GET["logout"])) {
            $this->doLogout();
        }
        // login via post data (if user just submitted a login form)
        elseif (isset($_POST["login"])) {
            $this->dologinWithPostData();
        }
    
    }

   
   
    private function dologinWithPostData()
    {
        // check login form contents
        if (empty($_POST['user_name'])) {
            $this->errors[] = "Username field was empty.";
        } elseif (empty($_POST['user_password'])) {
            $this->errors[] = "Password field was empty.";
        } elseif (!empty($_POST['user_name']) && !empty($_POST['user_password'])) {
				$user_name=$_POST['user_name'];
            // create a database connection, using the constants from config/db.php (which we loaded in index.php)
            $user_password=$_POST['user_password'];
            
            $admin =new Administrator();
            //echo "$user_name";
           	$check= $admin->existsAdmin($user_name,$user_password);
           //	echo "$check";
            if($check!=NULL){
            	$_SESSION['user_name'] = $_POST['user_name'];
   				//	echo "ad";
                        $_SESSION['user_login_status'] = 1;
                        $_SESSION['user_type']=$check;
            				return;
            }
            $coun =new Counselor();
            $check= $coun->existsCouns($user_name,$user_password);
            if($check!=NULL){
            	$_SESSION['user_name'] = $_POST['user_name'];
   					
                        $_SESSION['user_login_status'] = 1;
                        $_SESSION['user_type']=$check;
            				return;
            }
            $appl =new Applicant();
            $check= $appl->existsAppl($user_name,$user_password);
            if($check!=NULL){
            	$_SESSION['user_name'] = $_POST['user_name'];
   
                        $_SESSION['user_login_status'] = 1;
                        $_SESSION['user_type']=$check;
            				return;
            }
            
            else {
                    $this->errors[] = "This user does not exist.";
                    echo "Username/Password mismatch\n";
                   // include("../Views/not_login.php");
                }
             
            }
		}

    public function doLogout()
    {
        // delete the session of the user
        
        $_SESSION = array();
        //echo="logged out";
        session_destroy();
        // return a little feeedback message
      //  $this->messages[] = "You have been logged out.";

    }

    public function isUserLoggedIn()
    {
        if (isset($_SESSION['user_login_status']) AND $_SESSION['user_login_status'] == 1) {
        		//echo "dasda wf";   			 	
            return $_SESSION['user_type'];
        }
        // default return
        return NULL;
    }
}

?>
