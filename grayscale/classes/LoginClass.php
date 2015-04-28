<?php

 require_once("MainClass.php");

class login
{
     public $errors = array();
   
    public function __construct()
    {

        session_start();

//Check if user clicks to log out
        if (isset($_GET["logout"])) {
            $this->doLogout();
        }

//Login with appropriate privileges
        elseif (isset($_POST["login"])) 
        {
            $this->dologinWithPostData();
        }
    
    }

   
   
    private function dologinWithPostData()
    {
//Check login form contents
        if (empty($_POST['user_name'])) 
        {
            $this->errors[] = "Username field is empty";
        } 
        elseif (empty($_POST['user_password'])) 
        {
            $this->errors[] = "Password field was empty";
        } 
        elseif (!empty($_POST['user_name']) && !empty($_POST['user_password'])) 
        {
	    $user_name=$_POST['user_name'];
            $user_password=$_POST['user_password'];
            
            $admin =new Administrator();
            $res= $admin->existsAdmin($user_name,$user_password);
            if($res!=NULL)
            {
            	$_SESSION['user_name'] = $_POST['user_name'];
   			    $_SESSION['user_login_status'] = 1;
                $_SESSION['user_type']="Administrator";
                $_SESSION['fname']=$res['fname'];
                $_SESSION['lname']=$res['lname'];
                $_SESSION['mailid']=$res['mailid'];
            	return;
            }

            $coun =new Counselor();
            $res= $coun->existsCouns($user_name,$user_password);
            if($res!=NULL)
            {
            	$_SESSION['user_name'] = $_POST['user_name'];
		        $_SESSION['user_login_status'] = 1;
                $_SESSION['user_type']="Counselor";
                $_SESSION['fname']=$res['fname'];
                $_SESSION['lname']=$res['lname'];
                $_SESSION['mailid']=$res['mailid'];
            	return;
            }

            $appl =new Applicant();
            $res= $appl->existsAppl($user_name,$user_password);
            if($res!=NULL)
            {
            	$_SESSION['user_name'] = $_POST['user_name'];
                $_SESSION['user_login_status'] = 1;
                $_SESSION['user_type']="Applicant";
                $_SESSION['fname']=$res['fname'];
                $_SESSION['lname']=$res['lname'];
                $_SESSION['mailid']=$res['mailid'];
                $_SESSION['mailidCouns']=$res['mailidCouns'];
            	return;
            }
            
            else 
            {
                $this->errors[] = "This user does not exist.";
                echo "Username/Password mismatch";
            }
        }
	}

    public function doLogout()
    {
        // delete the session of the user
        
        $_SESSION = array();
        

        if (ini_get("session.use_cookies")) 
        {
            $params = session_get_cookie_params();
            setcookie(session_name(), '', time() - 42000,
            $params["path"], $params["domain"],
            $params["secure"], $params["httponly"]);
        }

        session_destroy();
    }

    public function isUserLoggedIn()
    {
        if (isset($_SESSION['user_login_status']) AND $_SESSION['user_login_status'] == 1) {
        		  			 	
            return $_SESSION['user_type'];
        }
        
        return NULL;
    }
}

?>
