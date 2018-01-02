<?php
include 'fields.php';

class DeleteAccount{

private $fbid;




function __construct(){

	$con = mysqli_connect('localhost','root','root', 'employme');

	
	  $this->facebookID = $_POST['namefacebookID'];  
	   $this->facebookIDT = trim($this->facebookID);

	  
	

	mysqli_query($con, "UPDATE `employme`.`accountsdb` SET `toDelete` = 'y' WHERE `fbid` = '$this->facebookIDT'");
	
	
	echo $this->facebookID;
	echo $this->randnum;
	
	echo "<br>....Deleted";


}

}

$listObj = new DeleteAccount();

?>