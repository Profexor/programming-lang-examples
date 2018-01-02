<?php
session_start();
//require 'connection.inc.php';
//require 'connectionlist.inc.php';
//require 'connectionProfile.inc.php';

//OOP style of PHP -> Connecting to MySQL Database

class Fields{

public $usernameS;
public $emp;
public $nameS;
public $cv;
public $cvX;
public $email;
public $randnum;
public $numberF;
public $company;

//new facebook
public $fbid;
public $nameFb;
public $emailFb;


function __construct(){

$this->fbid = $_SESSION['fbid'];
$this->nameFb = $_SESSION['nameFb'];
$this->emailFb = $_SESSION['emailFB'];

//echo $this->fbid;


$con = mysqli_connect('localhost','root','root', 'employme');


$mysql_statement = "SELECT * FROM `employme`.`profiledb`";
$mysql_statementTwo = "SELECT * FROM `employme`.`listing`";
$mysql_statementThree = "SELECT * FROM `employme`.`accountsdb` WHERE fbid = '$this->fbid'";

$mysql_command = mysqli_query($con, $mysql_statement);
$mysql_commandTwo = mysqli_query($con, $mysql_statementTwo);
$mysql_commandThree = mysqli_query($con, $mysql_statementThree);


	//for registration retrieve
   while($row = mysqli_fetch_array($mysql_commandThree)){
	
	$this->email = $row['email'];
	//echo $this->email . "<br>";
	
	$this-> emp = $row['Emp'];
	//echo $this->emp . "<br>";
	
	$this->cv = $row['cv'];
	//echo $this->cv;
	
	$this->cvX = $row['cvX'];
	//echo $this->cvX;
	
	$this->nameS = $row['name']; 
	//echo $this->nameS;
	
	$this->numberF = $row['number']; 
	//echo $this->numberF;
	
	$this->company = $row['company'];
	//echo $this->company;
	
	$this->uniName = $row['uniName'];
	//echo $this->company;
	
	$this->uniLevel = $row['uniLevel'];
	//echo $this->company;
	
	$this->crimCon = $row['crimCon'];
	//echo $this->company;
	
	$this->skillsOne = $row['skillsOne'];
	//echo $this->company;
	
	$this->skillsTwo = $row['skillsTwo'];
	//echo $this->company;
	
	$this->skillsThree = $row['skillsThree'];
	//echo $this->company;	
	
	
	}
	
	//PROFILE
	
	$_SESSION['nameStat'] = $this->nameS;
	$_SESSION['cvStat'] = $this->cv;
	$_SESSION['cvX'] = $this->cvX;
	$_SESSION['empStat'] = $this->emp;
	$_SESSION['emailStat'] = $this->email;
	$_SESSION['numberF'] = $this->numberF;
	$_SESSION['company'] = $this->company;
	
	//new features
	$_SESSION['uniName'] = $this->uniName;
	$_SESSION['uniLevel'] = $this->uniLevel;
	$_SESSION['crimCon'] = $this->crimCon;
	$_SESSION['skillsOne'] = $this->skillsOne;
	$_SESSION['skillsTwo'] = $this->skillsTwo;
	$_SESSION['skillsThree'] = $this->skillsThree;
	
	
	
}

}
$fields = new Fields();





?>