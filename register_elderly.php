<?php
session_start();

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
$errors = array(); 

// connect to the database
$conn = mysqli_connect("localhost", "root", "eap2019ge4", "eap2019ge4");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// REGISTER USER
if (isset($_POST['reg_user'])) {
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

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM elderly WHERE username='$username' OR password='$password_1' LIMIT 1";
  $result = mysqli_query($conn, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
    $password = $password_1;
    
  	$sql = "INSERT INTO elderly (lname, fname, address, city, postcode, phone, birthday, gender, username, password) 
      VALUES('$lname', '$fname', '$address', '$city', '$postcode', '$phone', '$birthday', '$gender', '$username','$password')";
  	if ($conn->query($sql) === TRUE) {
        header('location: index.php?registration=success');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  	
  }
?>