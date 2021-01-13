<?php
if($_POST['formSubmit'] == "Submit")
{
	$errorMessage = "";
	
	if(empty($_POST['Name']))
	{
		$errorMessage .= "<li>You forgot to enter an Name!</li>";
	}
	if(empty($_POST['Email']))
	{
		$errorMessage .= "<li>You forgot to enter your Email!</li>";
	}
		if(empty($_POST['Subject']))
	{
		$errorMessage .= "<li>You forgot to enter a Subject!</li>";
	}
		if(empty($_POST['Message']))
	{
		$errorMessage .= "<li>You forgot to enter your Message!</li>";
	}
	
	$varMovie = $_POST['Name'];
	$varEmail = $_POST['Email'];
	$varSubject = $_POST['Subject'];
	$varMessage = $_POST['Message'];

	if(empty($errorMessage)) 
	{
		$fs = fopen("mydata.csv","a");
		fwrite($fs,$varName . ", " . $varMovie . "\n");
		fclose($fs);
		
		header("Location: thankyou.html");
		exit;
	}
}
