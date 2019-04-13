<?php
//session_start();

// initializing variables

$userid = "";
$username= "";
$address = "";
$country = "";
$contact = "";
$email = "";
$passid = "";
//$ConfirmPassword = "";
//$gender = "";

$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'COMP307');

// REGISTER USER
if (isset($_POST['registration'])) {
  // receive all input values from the form
  $userid = mysqli_real_escape_string($db, $_POST['userid']);
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $address = mysqli_real_escape_string($db, $_POST['address']);
  $country = mysqli_real_escape_string($db, $_POST['country']);
  $contact = mysqli_real_escape_string($db, $_POST['contact']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $passid = mysqli_real_escape_string($db, $_POST['passid']);
 // $gender = mysqli_real_escape_string($db, $_POST['gender']);

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
    $passid = md5($passid);
    //encrypt the password before saving in the database
   // $ConfirmPassword = md5($ConfirmPassword);

    $query = "INSERT INTO registered (Userid,Username,Address,Country,email, Passid, Gender) 
         VALUES('$userid',$username','$address','$country','$email','$contact,'$passid')";

     mysqli_query($db, $query);
    $_SESSION['Username'] = $username;
    $_SESSION['success'] = "You are now registered in our system";

  }
}