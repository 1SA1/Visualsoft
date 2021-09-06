<?php
if(isset($_POST['submit']))
{
	$name = $_POST['name'];
	$mail = $_POST['mail'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];
	
	$mailTo="info@visualsoft-inc.com";
	$headers = "From: ".$mail;
	$txt = "You have recived and email from ".$name.".\n\n".$message;
	mail($mailTo,$subject,$txt,$headers);
	header("Location: index.html?mailsend");
}
?>