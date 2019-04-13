<?php
session_start();

// initializing variables

$FirstName = "";
$Lastname = "";
$UserName = "";
$Institution = "";
$RegNo= "";
$Faculty = "";
$email    = "";
$Password = "";
//$ConfirmPassword = "";
//$Gender = "";

$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'COMP307');

// REGISTER USER
if (isset($_POST['register_user'])) {
  // receive all input values from the form
  $FirstName = mysqli_real_escape_string($db, $_POST['FirstName']);
    $Last=name = mysqli_real_escape_string($db, $_POST['LastName']);
  $Username = mysqli_real_escape_string($db, $_POST['UserName']);
  $Institution = mysqli_real_escape_string($db, $_POST['Institution']);
  $RegNo = mysqli_real_escape_string($db, $_POST['RegNo']);
  $Faculty = mysqli_real_escape_string($db, $_POST['Faculty']);
  $email = mysqli_real_escape_string($db, $_POST['Email']);
  $Password = mysqli_real_escape_string($db, $_POST['Password']);
  $ConfirmPassword= mysqli_real_escape_string($db, $_POST['ConfirmPassword']);
    $Gender = mysqli_real_escape_string($db, $_POST['Gender']);

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
    $Password = md5($Password);
    //encrypt the password before saving in the database
    $ConfirmPassword = md5($ConfirmPassword);

    $query = "INSERT INTO Users (FirstName,LastName,UserName,Institution,RegNo,Faculty,Email, Password,ConfirmPassword,Gender) 
          VALUES('$FirstName','$Lastname','$UserName','$Institution','$RegNo','$Faculty','$email','$Password','$ConfirmPassword','$Gender')";

     mysqli_query($db, $query);
    $_SESSION['FirstName'] = $FirstName;
    $_SESSION['success'] = "You are now logged in";

  }
}
