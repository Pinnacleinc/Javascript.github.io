<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "comp307");


$userid=$_POST["userid"];
//$lname=$_POST["lname"];
$username=$_POST["username"];
$address=$_POST["address"];
$country=$_POST["country"];
$contact=$_POST["contact"];
$email=$_POST["email"];
$passid=$_POST["passid"];
//$gender=$_POST["gender"];
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
/* Escape user inputs for security
$username = mysqli_real_escape_string($_REQUEST['username']);
$email = mysqli_real_escape_string($_REQUEST['email']);
$password = mysqli_real_escape_string($_REQUEST['password']);*/
 
// Attempt insert query execution
if (isset($_POST["registration"])) {
}
$sql = "INSERT INTO registered( Userid,Username,Address, Country, Contact, email, Passid,Gender) 
VALUES ('$userid','$username','$address','$country','$contact',$email','$passid')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

 
// Close connection
mysqli_close($link);
?>