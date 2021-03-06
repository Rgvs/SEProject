<!DOCTYPE html>
<html>
<head>
<title>Create tables</title>
</head>

<body>
<?php

require_once('DBClass.php');


echo "Creating SQL Database";

/* Assuming existence of a database- SystemDB

$SystemDB= <<<HERE
CREATE DATABASE CounsSystem
HERE;              */

$Administrator= <<<HERE
CREATE TABLE Administrator
(fname VARCHAR(15) NOT NULL,
lname VARCHAR(15) NOT NULL,
uname VARCHAR(15) NOT NULL,
mailid VARCHAR(15),
password VARCHAR(15) NOT NULL,
PRIMARY KEY(mailid));  
HERE;

$Counselor= <<<HERE
CREATE TABLE Counselor
(fname VARCHAR(15) NOT NULL,
lname VARCHAR(15) NOT NULL,
mailid VARCHAR(15),
password VARCHAR(15) NOT NULL,
PRIMARY KEY(mailid));
HERE;

$Applicant= <<<HERE
CREATE TABLE Applicant
(fname VARCHAR(15) NOT NULL,
lname VARCHAR(15) NOT NULL,
mailid VARCHAR(15),
password VARCHAR(15) NOT NULL,
firstVisit BOOLEAN NOT NULL DEFAULT TRUE,
mailidCouns VARCHAR(15),
PRIMARY KEY(mailid),
FOREIGN KEY(mailidCouns) REFERENCES Counselor(mailid));
HERE;

// BLOB-upto 64KB; MEDIUMBLOB-upto 16 MB

$Note= <<<HERE
CREATE TABLE Note
(note MEDIUMBLOB,
mailidAppl VARCHAR(15) NOT NULL,
PRIMARY KEY(mailidAppl),
FOREIGN KEY(mailidAppl) REFERENCES Applicant(mailid));
HERE;

$Docs= <<<HERE
CREATE TABLE Docs
(docName VARCHAR(40) NOT NULL,
content MEDIUMBLOB,
mailidAppl VARCHAR(15) NOT NULL,
PRIMARY KEY(mailidAppl),
FOREIGN KEY(mailidAppl) REFERENCES Applicant(mailid));
HERE;

//DATE format: YYYY:MM:DD; YEAR: YYYY. GRE score, TOEFL score-integer/float?

$Profile= <<<HERE
CREATE TABLE Profile
(dob DATE,
college VARCHAR(40),
branch VARCHAR(40),
yearofComp YEAR,
gpa float,
greScore float,
toeflScore float,
mailidAppl VARCHAR(15) NOT NULL,
PRIMARY KEY(mailidAppl),
FOREIGN KEY(mailidAppl) REFERENCES Applicant(mailid));
HERE;

//TIME format: HH:MM:SS

$Message= <<<HERE
CREATE TABLE Message
(sender CHAR(1) NOT NULL,
content BLOB,
date DATE NOT NULL,
time TIME NOT NULL,
mailidAppl VARCHAR(15) NOT NULL,
PRIMARY KEY(sender,time,date,mailidAppl),
FOREIGN KEY(mailidAppl) REFERENCES Applicant(mailid));
HERE;

$db=new DBClass();

//db->select("$SystemDB");

$db->query($Administrator);
$db->query($Counselor);
$db->query($Applicant);
$db->query($Note);
$db->query($Docs);
$db->query($Profile);
$db->query($Message);

echo "SQL Database created successfully";
?>
</body>
</html>





















