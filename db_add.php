<?php
require "db.php";
$email = $_POST["email"];
$sql = "SELECT email FROM accounts WHERE email='$email'";
if(runQuery($sql)==true){
	echo "Email is now existing!";
}
else{
	$sql = "INSERT INTO accounts(id,fname,lname,email,phone,birthday,gender)
		VALUES(id,'" . $_POST["firstName"] . "','" . $_POST["lastName"] . "','" . $_POST["email"] . "',
				'" . $_POST["phoneNumber"] . "','" . $_POST["birthday"] . "','" . $_POST["gender"] . "')";
	runQuery($sql);
	echo $_POST["firstName"] . " " . $_POST["lastName"] . "You are now registered!";
}
?>