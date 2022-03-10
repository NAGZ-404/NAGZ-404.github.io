<?php
  // Creates connection
  // $conn = mysqli_connect("localhost","root","","ecs417");
  require('linkedDB.php');


  session_start();

    $email = $_POST['email'];
    $password = $_POST['password'];

    //Is USER in DB?
    $query = "SELECT * FROM USERS WHERE email= '$email' AND password= '$password' LIMIT 1";
    $result = mysqli_query($conn, $query);
    $row = mysqli_num_rows($result);

    if ($row == 1){

      // $_SESSION['loggedIn'] == true;
      $user_data = mysqli_fetch_assoc($result);
      $_SESSION['firstName'] = $user_data['firstName'];
      $_SESSION['email'] = $user_data['email'];

      if ($_SESSION['email'] == 'nageeb752@gmail.com'){
        header('Location: addpost.php');
        die;
      }else{
        header('Location: homepage.php');
        die;
      }

    }else{
      echo "ERROR: Please enter your email and password correctly";
    }

?>
