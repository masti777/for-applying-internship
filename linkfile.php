
<?php 
function validate_input($data){
    $data=trim($data);
    $data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
}
$first_name = validate_input($_POST["first_name"]);
$email_address = validate_input($_POST["email_address"]);
$github_username = validate_input($_POST["github_username"]);
$department = validate_input($_POST["department"]);
$gpa = validate_input($_POST["gpa"]);
$pdf = validate_input($_POST["pdf"]);




//validating input to accept only characters and white space
if (!preg_match("/^[a-zA-Z-' ]*$/", $first_name) || !preg_match("/^[a-zA-Z-' ]*$/", $department)) {
    echo "Only letters and white space allowed";
  } 
      else {
        $connection = mysqli_connect("localhost", "root", "");//try to creat connection
        if (!$connection) {
          print("Server not found!!!");
        }
        else {
            mysqli_select_db($connection, "intern");      
            $sqlCheck = "SELECT email_address FROM file where email_address = '$email_address'";
            $queryCheck = mysqli_query($connection, $sqlCheck);
            if (mysqli_num_rows($queryCheck)>0) {//if the user already registered
                echo "This user's file is already added!Go to user Page! ";
				
				
				
                print("<br><a href='user.php'>Goto user page</a>");
              }
              else {
                $sql = "INSERT INTO  file  VALUES('$first_name','$email_address','$github_username','$department','$gpa','$pdf')";
                $query = mysqli_query($connection, $sql);
                if (!$query) {
                  print("user's file is not added.please try again!!!");
                } else {
                   header("location: user.php");
                 //print("This user's file is succusesfully added!<br><a href='user.php'>Go to user Page</a>");
                }
              }     
    }
    mysqli_close($connection);
}

?>