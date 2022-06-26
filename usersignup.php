
<?php 
function validate_input($data){
    $data=trim($data);
    $data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
}
$first_name = validate_input($_POST["first_name"]);
$last_name = validate_input($_POST["last_name"]);
$email_address = validate_input($_POST["email_address"]);
$password = validate_input($_POST["password"]);


//validating input to accept only characters and white space
if (!preg_match("/^[a-zA-Z-' ]*$/", $first_name) || !preg_match("/^[a-zA-Z-' ]*$/", $last_name)) {
    echo "Only letters and white space allowed";
  } 
      else {
        $connection = mysqli_connect("localhost", "root", "");//try to creat connection
        if (!$connection) {
          print("Server not found!!!");
        }
        else {
            mysqli_select_db($connection, "intern");      
            $sqlCheck = "SELECT email_address FROM usersignup where email_address = '$email_address'";
            $queryCheck = mysqli_query($connection, $sqlCheck);
            if (mysqli_num_rows($queryCheck)>0) {//if the user already registered
                echo "You are already registered!Go to login Page! ";
			    print("<br><a href='login.php'>Goto login page</a>");
              }
              else {
                $sql = "INSERT INTO  usersignup  VALUES('$first_name','$last_name','$email_address','$password')";
                $query = mysqli_query($connection, $sql);
                if (!$query) {
                  print("You are not regitered.please try again!!!");
                } else {
                   header("location: login.php");
                // print("You are succusesfully registered!<br><a href='user.php'>Go to user Page</a>");
                }
              }     
    }
    mysqli_close($connection);
}

?>