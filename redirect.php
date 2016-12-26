<?php
session_start();
require("connectphpclass.php")	;
if(isset($_SESSION["email"]))
	{
		$email = $_SESSION["email"];
		$nam = $_SESSION["name"];
		$sql = "SELECT * from adminlogin WHERE email='$email'";
		$result  = mysqli_query($conn,$sql) or die("errror in query");
		$count = mysqli_num_rows($result);
		if($count == 1 )
		{
	
			header("Location:year.php");
		}
		else
		{
			$sql = "SELECT * from login WHERE email='$email'";
			$result  = mysqli_query($conn,$sql) or die("errror in query");
			$count = mysqli_num_rows($result);
			if($count == 1)
			{
				header("Location:yes_bank_details.php");
			}
			if($count ==0)
			{
				$sql = "INSERT INTO login VALUES('$email','$nam')";
				$result  = mysqli_query($conn,$sql) or die("errror in query");
				header("Location:index1.html");
			}
		}
	}
	
?>