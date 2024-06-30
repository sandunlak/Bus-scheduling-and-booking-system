<?php

if(isset($_POST['submit'])) {
	$firstname = $_POST['first name'];
	$lastname = $_POST['last name'];
	$subject = $_POST['subject'];
	$emailFROM = $_POST['email'];
	$message = $_POST['message'];
	$number = $_POST['mobile number'];
	
	$emailTo = "dani@mmtuts.net";
	$headers = "From: ".$emailFROM;
	$txt = "You have received an email form ".$name.".\n\n".$message;
	
	mail($emailTo, $subject, $txt, $headers);
	header("Location: index.php?emailsend");
}
?>