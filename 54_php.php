<!DOCTYPE HTML>
<html>
<body>

<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

if($_SERVER["REQUEST_METHOD"] == "POST");
{
	if(empty($_post["name"]))
	{
		$nameErr="name is required";
	}
	
	 else
	{
	
		$name=test_input($_POST["name"]);
	}
	
	if(empty($_post["name"]))
	{
		$emailErr="email is required";
	}
	 else
	{
		$email=test_input($post["name"]);
	}

	if (empty($_POST["website"])) 
	{
		$website = "";
	} 
	 else
	{
		 $website = test_input($_POST["website"]);
	}

	if (empty($_POST["comment"])) 
	{
		$comment = "";
    } 
	 else 
	{
		$comment = test_input($_POST["comment"]);
    }

	if (empty($_POST["gender"])) 
	{
		$genderErr = "Gender is required";
	}
	 
	 else 
	{
		$gender = test_input($_POST["gender"]);
	}
?>

</body>
<html>