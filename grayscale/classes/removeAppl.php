<?php

 require_once("classes/main_class.php");

class RA
{
     public $errors = array();
   	public $result=false;
    public function __construct()
    {
        // create/read session, absolutely necessary
        session_start();

        // check the possible login actions:
        // if user tried to log out (happen when user clicks logout button)
        if (isset($_POST["remove_appl"])) {
            $this->doremoveapplWithPostData();
        }
       
        // login via post data (if user just submitted a login form)
        
    
    }

   
   
    private function doremoveapplWithPostData()
    {
        // check login form contents
      //  $user_email=$_POST['user_email'];
        
            $admin =new Administrator();
            echo "addAadappl  \n";
           	$check= $admin->removeAppl($user_email);
         /*  	//echo "$check";
           if($check==true){
					echo "rahul";           	
           		$_SESSION['result']=true;
           }
           else {
           	echo "ram";
           		$_SESSION['result']=false;           	
           			
           }
           */
            
            
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
