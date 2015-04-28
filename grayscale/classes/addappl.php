<?php

 require_once("classes/main_class.php");

class ADDA
{
     public $errors = array();
   	public $result=false;
    public function __construct()
    {
        // create/read session, absolutely necessary
        session_start();

        // check the possible login actions:
        // if user tried to log out (happen when user clicks logout button)
        if (isset($_POST["adding_appl"])) {
            $this->doaddapplWithPostData();
        }
       
        // login via post data (if user just submitted a login form)
        
    
    }

   
   
    private function doaddapplWithPostData()
    {
        // check login form contents
        $user_email=$_POST['user_email'];
        $user_password=$_POST['user_password'];
        $first_name=$_POST['first_name'];
        $last_name=$_POST['last_name'];
         $cname=$_POST['user_counselor_email'];   
            $admin =new Administrator();
            echo "$last_name";
           	$check= $admin->addAppl($first_name,$last_name,$user_email,$user_password,$cname);
           	//echo "$check";
           if($check==true){
					echo "rahul";           	
           		$_SESSION['result']=true;
           }
           else {
           	echo "ram";
           		$_SESSION['result']=false;           	
           			
           }
           
            
            
		}
	

    
    public function issuccess()
    {
        if ($_SESSION['result']==true) {
      //  		echo "dasda wf";   			 	
            return true;
        }
        // default return
     //   echo "da";
        return false;
    }
}

?>
