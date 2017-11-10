<?php
if(isset($_POST['submit'])){
	$user-name=$_POST['name'];
	$user-email=$_POST['email'];
	$user-url=$_POST['url'];
	$user-message=$_POST['message'];

	$to='erickamaa8@gmail.com';
	$subject='form submission';
	$message="Name: ".$name."\n"."website: ".$url."\n". "wrote the following: "."\n\n".$message;
	$headers="From: ".$email;

	if(mail($to, $subject, $message, $headers)){
		echo "<h1>sent successful! Thank you".$name.",we will contact you shortly!</h1>";

	}
	else{
		echo"something went wrong!";
	}
}
?>