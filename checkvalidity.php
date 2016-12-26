<?php
session_start();
 $nam = $_POST["name"];
 $email = $_POST["ema"];
 $_SESSION["name"]=$nam;
 $_SESSION["email"]=$email;
 


/*$sql = "SELECT * from login WHERE email='$email'";
$result  = mysqli_query($conn,$sql) or die("errror in query");
$count = mysqli_num_rows($result);
if(count == 1 )
{
	
	header("Location:year.php");
}
*/

//header("Location:year.php");


?>