<?php
session_start();

if (isset($_POST['cancelUser'])) {
    header('location: mainMenu.php'); 
    exit();
}

// initializing variables
$lname = "";
$fname = "";
$address = "";
$city = "";
$postcode = "";
$phone = "";
$birthday = "";
$gender = "";    
$username = "";
$password1 = "";
$password2 = "";

// connect to the database
$conn = mysqli_connect("localhost", "root", "eap2019ge4", "eap2019ge4");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// REGISTER USER
if (isset($_POST['upUser'])) {
  // receive all input values from the form
  $lname = mysqli_real_escape_string($conn, $_POST["lname"]);
  $fname = mysqli_real_escape_string($conn, $_POST["fname"]);
  $address = mysqli_real_escape_string($conn, $_POST["address"]);
  $city = mysqli_real_escape_string($conn, $_POST["city"]);
  $postcode = mysqli_real_escape_string($conn, $_POST["postcode"]);
  $phone = mysqli_real_escape_string($conn, $_POST["phone"]);
  $birthday = mysqli_real_escape_string($conn, $_POST["birthday"]);
  $gender = mysqli_real_escape_string($conn, $_POST["gender"]);
  $username = mysqli_real_escape_string($conn, $_POST["username"]);
  $password_1 = mysqli_real_escape_string($conn, $_POST["password1"]);
  $password_2 = mysqli_real_escape_string($conn, $_POST["password2"]);
}

  if (count($errors) == 0) {
    $password = $password_1;
    
    $elderID=$_SESSION['userID'];
  	$sql = "UPDATE elderly SET lname='$lname', fname='$fname', address='$address', city='$city', 
      postcode='$postcode', phone='$phone', birthday='$birthday', gender='$gender', username='$username',
      password='$password' WHERE elderly_id='$elderID'";  
      
    
    if ($conn->query($sql) === TRUE) {
        header('location: mainMenu.php?updateUserProfile=success');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  	
  }
?>