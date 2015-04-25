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

//Create note and profile for applicant
		else
		{
			$ins_note="INSERT INTO Note(mailidAppl)
						VALUES(".$qmailid.");";
			$res=$db->query($ins_note);
			if($res==false)
				return false;
			$ins_prof="INSERT INTO Profile(mailidAppl)
						VALUES(".$qmailid.");";
			$res=$db->query($ins_prof);
			if($res==false)
				return false;
			else return true;
		} 
	}

//Return true on successful removal of counselor, else return false
	public function removeCouns($mailid)
	{
		global $db;
		$qmailid=$db->quote($mailid);
		$query="DELETE FROM Counselor
		WHERE mailid=".$qmailid;
		$res=$db->query($query);
		if($res==false)
			return false;
		else return true;
	}
		
//Return true on successful removal of applicant, else return false		
	public function removeAppl($mailid)
	{
		global $db;
		$qmailid=$db->quote($mailid);
		$query="DELETE FROM Applicant
				WHERE mailid=".$qmailid;
		$res=$db->query($query);
		if($res==false)
			return false;
		else return true;
	}  

//Return true on successful reassigning of applicants, else return false 
	public function reassign($mailidAppl,$mailidCouns)
	{
		global $db;
		$qmailidAppl=$db->quote($mailidAppl);
		$qmailidCouns=$db->quote($mailidCouns);
		$query="UPDATE 
				Applicant
				SET mailidCouns = ".$qmailidCouns." WHERE mailid = ".$qmailidAppl.";";
		$res=$db->query($query);
		if($res==false)
			return false;
		else return true;
	}

//Return list of all counselors on success, else return false
	public function AllCounselors()
	{
		global $db;
		$query="SELECT *
				FROM Counselor ;";
		$res=$db->select($query);
		if($res==false)
			return false;
		else return $res;
	}

//Return list of all applicants on success, else return false
	public function AllApplicant()
	{
		global $db;
		$query="SELECT *
				FROM Applicant ;";
		$res=$db->select($query);
		if($res==false)
			return false;
		else return $res;
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

//Return profile data of applicant on success, false on failure
	public function viewProfile($mailidAppl) 
	{
		global $db;
		$qmailidAppl=$db->quote($mailidAppl);
		$query="SELECT * 
				FROM Profile
				WHERE mailidAppl=".$qmailidAppl.";";
		$res=$db->select($query);
		if($res==false)
			return false;
		else return $res;
	}
	
//Return true on successful editing, else false
	function editNote($note,$mailid)
	{
		global $db;
		$qnote=$db->quote($note);
		$qmailid=$db->quote($mailid);
		$query="UPDATE Note
				SET note=".$qnote." 
				WHERE mailidAppl=".$qmailid.";";
		$res=$db->query($query);
		if($res==false)
			return false;
		else return true;
	}

//Return true on successful editing, else false
	public function editProfile($dob,$college,$branch,$yearofComp,$gpa,$greScore,$toeflScore,$mailidAppl)
	{
		global $db;
		$qdob=$db->quote($dob);
		$qcollege=$db->quote($college);
		$qbranch=$db->quote($branch);
		$qyearofComp=$db->quote($yearofComp);
		$qgpa=$db->quote($gpa);
		$qgreScore=$db->quote($greScore);
		$qtoeflScore=$db->quote($toeflScore);
		$qmailidAppl=$db->quote($mailidAppl);
		$query="UPDATE Profile
				SET dob=".$qdob.",college=".$qcollege.",branch=".$qbranch.
				",yearofComp=".$qyearofComp.",gpa=".$qgpa.",greScore=".$qgreScore.
				",toeflScore=".$qtoeflScore.
				"WHERE mailidAppl=".$qmailidAppl.";";
		$res=$db->query($query);
		if($res==false) 
			return false;

//Set firstVisit to FALSE for the applicant
		else 
		{
			$query="UPDATE Applicant 
					SET firstVisit=FALSE
					WHERE mailid=".$qmailidAppl.";";
			$res=$db->query($query);
			if($res==false)
				return false;
			else return true;
		}
	}

//Return 1 if it is the firstvisit of applicant, else 0
	public function isfirst($mailid)
	{
		global $db;
		$qmailid= $db->quote($mailid);
		$query="SELECT firstVisit
				FROM Applicant
				WHERE mailid=".$qmailid." ;"; 
		$rows=$db->select($query);
		return $rows[0]['firstVisit'];
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
