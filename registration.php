<?php
  require('linkedDB.php');

  if (isset($_REQUEST["submit"])){
    $firstname = $_REQUEST['firstname'];
    $lastname = $_REQUEST['lastname'];
    $dob = $_REQUEST['dob'];
    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];

    $query = "INSERT INTO USERS(firstName, lastName, DOB, email, password) VALUES('$firstname', '$lastname', '$dob', '$email', '$password')";
    $result = mysqli_query($conn, $query);
    header('Location: homepage.php');
    die;
  }



?>
