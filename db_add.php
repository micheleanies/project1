<?php
require "db.php";
$email = $_POST["email"];
$fname = $_POST["firstname"]; 

echo $fname . "heoijweif";

$sql = "SELECT email FROM accounts WHERE email='$email'";
if(runQuery($sql)==true){
	echo $_POST["firstname"] . " " . $_POST["lastname"] . "sup!";
}
else{
	$sql = "INSERT INTO accounts(id,fname,lname,email,phone,birthday,gender)
		VALUES(id,'" . $_POST["fname"] . "','" . $_POST["lname"] . "','" . $_POST["email"] . "',
				'" . $_POST["phone"] . "','" . $_POST["birthday"] . "','" . $_POST["gender"] . "')";
	runQuery($sql);
	echo $_POST["firstname"] . " " . $_POST["lastname"] . "You are now registered!";
}
?>
