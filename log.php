<?php
//Variable Diclaration and Initialse from HTML Form

$email = validate_input($_POST['email']);
$password = validate_input($_POST['password']);



	$connection = mysqli_connect("localhost", "root", "");
	if (!$connection) {
		print("Server not found!!!");
	} else {
		mysqli_select_db($connection, "intern");
		$sql = "SELECT email_address,password FROM usersignup where email_address = '$email' and password = '$password'";
		$query = mysqli_query($connection, $sql);
		if (mysqli_num_rows($query) <= 0) {//if user is not registered
			echo "You are not registered! please register first! ";
			print("<br><a href='SIGNUP1.php'>Go to Register</a>");
		} else {
			header("location:user.php");
		}
	}

	mysqli_close($connection);
	
function validate_input($data)
{
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}
