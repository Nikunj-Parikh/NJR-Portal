<?php
	session_start();
	require("filedata.php");
	$_SESSION["email"] = "rohitmehta1996@gmail.com";
	$_SESSION["name"] = "Rohit Mehta";
	if(isset($_SESSION["email"]))
	{
		$email = $_SESSION["email"];
		$nam = $_SESSION["name"];
	/*	$sql ="SELECT * from file WHERE email='$email'";
		$result  = mysqli_query($conn,$sql);
		$row=mysqli_fetch_array($result);
		*/
		$nodownload = 0;
		$rating = 0;
		$flag=0;
		if($_FILES['pic']!="")
		{
			move_uploaded_file($_FILES['pic']['tmp_name'],$name.".zip");
			$file = $email.".zip";
		}else
		{
			echo "upload failed";
		}
		$sql = "INSERT INTO file VALUES ('".$email."','".$nam."','".$nodownload."','".$rating."','".$file."','".$flag."')";
		$result= mysqli_query($conn , $sql) or die("Query failed");

		if($result)
		{
			echo "Inserted Successfully";
		} else
		{
			echo "not";
		}

	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>success</title>
</head>
<body>
<form method="POST" enctype="multipart/form-data" action="filezip.php">
			
			<input type="file" name="pic"><br><br>
			<input type="submit" name="submit"><br><br>
			
		</form>
</body>
</html>