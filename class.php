<?php

class User 
{
    
    public function __construct()
    {

    }

    protected $fname;
    protected $lname;
    protected $mailid;
    protected $password;

    public function getname() 
    {
        // TODO implement here
    }

    class Class1 {

        public function __construct()
        {

        }

    }

}

class Administrator extends User 
{

    public $manage account;

    public function addCouns($fname, $lname, $mail, $passwd) 
    {
        // TODO implement here
    }

    public function addAppl($fname, $lname, $mail, $passwd) 
    {
        // TODO implement here
    }

    public function rmvCouns($mailid) 
    {
        // TODO implement here
    }

    public function rmvAppl($mailid) 
    {
        // TODO implement here
    }

    public function assgnAppl($mailAppl, $mailCouns) 
    {
        // TODO implement here
    }

    public function reassgn($mailCounsold, $mailCounsnew, $mailAppl) 
    {
        // TODO implement here
    }

    public function viewCouns() 
    {
        // TODO implement here
    }

    public function viewAppl()
    {
        // TODO implement here
    }

    public function getCounsExcept($oldCouns)
    {
        // TODO implement here
    }

}

class Counselor extends User 
{

    public function sendMesg($mailAppl, $mesg) 
    {
        // TODO implement here
    }

    public function showAllMesg($mailAppl)
    {
        // TODO implement here
    }

    public function viewAppl() 
    {
        // TODO implement here
    }

    public function viewApplProfile($mailAppl)
    {
        // TODO implement here
    }

    public function viewApplDoc($mailAppl, $docname) 
    {
        // TODO implement here
    }

    public function getCouns($mail) 
    {
        // TODO implement here
    }

    public function makeNote($note) 
    {
        // TODO implement here
    }

}

class Applicant extends User
{

    public function sendMesg($mesg)
    {
        // TODO implement here
    }

    public function showAllMesg() 
    {
        // TODO implement here
    }

    public function viewProfile()
    {
        // TODO implement here
    }

    public function viewDoc($docname)
    {
        // TODO implement here
    }

    public function editProfile($fieldToEdit) 
    {
        // TODO implement here
    }

    public function editDocs($docname,$content) 
    {
        // TODO implement here
    }

}

class AggrMessage 
{

    public function __construct()
    {

    }

    public function sendMesg($mesg, $sndr, $rcvr) 
    {
        // TODO implement here
    }

    public function showAllMesg() 
    {
        // TODO implement here
    }

}

class Message 
{

    public function __construct() 
    {

    }

    private $sender;
    private $receiver;
    private $content;
    private $time;
    private $date;

    public function showMesg() 
    {
        // TODO implement here
    }

    class Class1 {

        public function __construct() {
        }

    }

}

class Note 
{

    public function __construct() 
    {

    }

    private $note;

    public function viewNote()
    {
        // TODO implement here
    }

    public function updateNote() 
    {
        // TODO implement here
    }

}

class Profile 
{

    public function __construct() {
    }

    private $dob;
    private $college;
    private $branch;
    private $yearofCompl;
    private $gpa;
    private $greScore;
    private $toeflScore;

    public function updateField() 
    {
        // TODO implement here
    }

}

class Docs 
{

    public function __construct() 
    {

    }

    private $resume;
    private $applEssay;
    private $recomLetter;
    private $OtherDocs;

    public function addDoc($docname, $content)
    {
        // TODO implement here
    }

    public function rmvDoc($docname)
    {
        // TODO implement here
    }

    public function viewDoc($docname) 
    {
        // TODO implement here
    }

}
