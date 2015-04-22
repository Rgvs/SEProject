<!DOCTYPE html>
<html>
<head>
  <title> class definitions </title>
</head>

<body>

<?php


require_once('DBClass.php');
$db=new DBClass(); 

class User
{
  protected $fname;
  protected $lname;
  protected $mailid;
  protected $password;
  
  function getuser()
  {
    echo $this->username;
  }
 
  function getpasswd()
  {
    return $this->password;
  }

  function setuser($name)
  {
    $this->username=$name;
  }

  function setpasswd($passwd)
  {
    $this->password=$passwd;
  }
}

class Administrator extends User
{
	private $uname;

//Return 'Administrator' if true, else NULL	
	public function existsAdmin($uname,$password)
	{
		global $db;
		$quname= $db->quote($uname);
		$qpassword=$db->quote($password);
		$query="SELECT *
				FROM Administrator
				WHERE uname=".$quname." AND password=".$qpassword.";";
		$rows=$db->select("$query");
		if($rows!==false)
		{
			return "Administrator";
		}
		else
			return NULL;
	}
	
//Return true on successful insertion into database, else false 
	public function addCouns($fname,$lname,$mailid,$password)
	{
		global $db;
		$qfname=$db->quote($fname);
		$qlname=$db->quote($lname);
		$qmailid=$db->quote($mailid);
		$qpassword=$db->quote($password);
		$query="INSERT INTO
				Counselor
				VALUES(".$qfname.",".$qlname.",".$qmailid.",".$qpassword.");";
		$res=$db->query($query);
		if($res==false)
			return false;
		else return true;
	}
	
//Return true on successful insertion into database, else false
	public function addAppl($fname,$lname,$mailid,$password,$mailidCouns)
	{
		global $db;
		$qfname=$db->quote($fname);
		$qlname=$db->quote($lname);
		$qmailid=$db->quote($mailid);
		$qpassword=$db->quote($password);
		$qmailidCouns=$db->quote($mailidCouns);
		$query="INSERT INTO
				Applicant
				VALUES(".$qfname.",".$qlname.",".$qmailid.",".$qpassword.",".true.",".$qmailidCouns.");";
		$res=$db->query($query);
		if($res==false)
			return false;
		else return true;
	}
	
}

class Counselor extends User
{
	private $firstVisit;
	private $mailidCouns;

//Return 'Counselor' if true, else NULL
	public function existsCouns($mailid,$password)
	{   global $db;
		$qmailid= $db->quote($mailid);  
		$qpassword=$db->quote($password);
		$query="SELECT *
				FROM Counselor
				WHERE mailid=".$mailid." AND password=".$password.";";
		$rows=$db->select($query);
		if($rows!==false)
		{
			return "Counselor";
		}
		else 
			return NULL;
	}
}

class Applicant extends User
{

//Return 'Applicant' if true, else NULL	
	public function existsAppl($mailid,$password)
	{
		global $db;
		$qmailid= $db->quote($mailid);
		$qpassword=$db->quote($password);
		$query="SELECT *
				FROM Applicant
				WHERE mailid=".$qmailid." AND password=".$qpassword.";"; 
		$rows=$db->select($query);
		if($rows!==false)
		{
			return "Applicant";
		}
		else
			return NULL;
	}
	
//Return the list of applicants if existing, else NULL
	public function getApplList($mailidCouns)
	{
		global $db;
		$qmailidCouns= $db->quote($mailidCouns);
		$query="SELECT *
				FROM Applicant
				WHERE mailidCouns=".$qmailidCouns.";";
		$rows=$db->select($query);
		if($rows!=false)
			return $rows;
		else return NULL;
	}
}

class Note
{
	private $note;
	private $mailidAppl;
}

class Docs
{
	private $docName;
	private $content;
	private $mailidAppl;
}

class Profile
{
	private $dob;
	private $college;
	private $branch;
	private $yearofComp;
	private $gpa;
	private $greScore;
	private $toeflScore;
	private $mailidAppl;
}



?>

</body>
</html>