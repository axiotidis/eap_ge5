<?php
session_start();

// initializing variables
  
$username= "";
$password= ""; 

// connect to the database
$conn = mysqli_connect("localhost", "root", "eap2019ge4", "eap2019ge4");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// LOGIN USER
if (isset($_POST['log_user'])) {
    // receive all input values from the form
    $username = mysqli_real_escape_string($conn, $_POST["user"]);
    $password = mysqli_real_escape_string($conn, $_POST['pass']);
}
    
  //check if a user does already exist with the same username and password
  $sql = "SELECT * FROM elderly WHERE username='$username' AND password='$password'";
  $result = mysqli_query($conn, $sql);
  $resultCheck = mysqli_num_rows($result); 
  
  if ($resultCheck > 0) {
    $row = $result->fetch_array(MYSQLI_NUM);
    $_SESSION['username'] = $username;
    $_SESSION['userID'] = $row[0];
    //print_r($row);
      header("Location: mainMenu.php?singup=success");
  }
  else {
    header("Location: login.php?singup=error");
  }
  $conn->close();
  
?>