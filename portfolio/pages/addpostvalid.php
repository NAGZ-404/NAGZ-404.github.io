<?php
  session_start();

  if (isset($_SESSION['email'])){
    if ($_SESSION['email'] == 'nageeb752@gmail.com'){
      header('Location: addpost.php');
      die;
    }else{
      echo "You don't have permission to post blogposts";
    }
  }else{
      header('Location: login.php');
      die;
  }

 ?>
