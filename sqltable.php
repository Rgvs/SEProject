<!DOCTYPE html>
<html>
<head>
<title>Create tables</title>
</head>

<body>

<?php

$

$SystemDB= <<<HERE
CREATE DATABASE CounsSystem
HERE;

$Counselor= <<<HERE
CREATE TABLE Counselor
(fname VARCHAR(15) NOT NULL,
lname VARCHAR(15) NOT NULL,
mailid VARCHAR(15),
password VARCHAR(15) NOT NULL,
PRIMARY KEY(mailid));
HERE;
             
$Administrator= <<<HERE
CREATE TABLE Administrator
fname VARCHAR(15) NOT NULL,
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
mailidCouns VARCHAR(15)
PRIMARY KEY(mailid),
FOREIGN KEY(mailidCouns) REFERNCES Counselor(mailid));
HERE;

// BLOB-upto 64KB; MEDIUMBLOB-upto 16 MB

$Note= <<<HERE
CREATE TABLE Note
(note MEDIUMBLOB,
mailidAppl NOT NULL,
PRIMARY KEY(mailidAppl),
FOREIGN KEY(mailidAppl) REFERENCES Applicant(mailid));
HERE;

$Docs= <<<HERE
CREATE TABLE Docs
(resume MEDIUMBLOB,
applEssay MEDIUMBLOB,
recomLetter MEDIUMBLOB,
otherDocs MEDIUMBLOB,
mailidAppl NOT NULL,
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
mailidAppl NOT NULL,
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
mailidAppl NOT NULL,
PRIMARY KEY(sender,time,date,mailidAppl),
FOREIGN KEY(mailidAppl) REFERENCES Applicant(mailid));
HERE;
























