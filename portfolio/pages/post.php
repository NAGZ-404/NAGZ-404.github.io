<!-- Source: https://www.youtube.com/watch?v=FyXRVXXGDUs -->
<?php

  require('linkedDB.php');

// Sorts date from most recent to least, Source: https://stackoverflow.com/questions/25951034/sort-a-php-array-table-by-date
  function post_sort($a, $b){
    $a = strtotime($a['date']);
    $b = strtotime($b['date']);
    if($a == $b){
      return 0;
    }
    return ($a > $b) ? -1:1;
  }

  $query = "SELECT * FROM BLOGPOSTS";
  $result = mysqli_query($conn, $query);
  $resultarray = array();

  // Source: https://www.youtube.com/watch?v=gnkI7hIC2RU
  if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
      $resultarray[] = $row;
    }
  }

  // $monthQuery = "SELECT MONTHNAME(date) FROM blogposts";
  // $monthResults = mysqli_query($conn, $monthQuery);
  // $months = array();
  //
  // if(mysqli_num_rows($monthResults) > 0){
  //   while($row = mysqli_fetch_assoc($monthResults)){
  //     $months[] = $row;
  //   }
  // }

  usort($resultarray, 'post_sort');
  // $months = array_unique($months);

  if (isset($_REQUEST["submit"])){
    $title = $_REQUEST['title'];
    $content = $_REQUEST['content'];

    $query = "INSERT INTO BLOGPOSTS(title, content, date) VALUES('$title', '$content', CURRENT_TIMESTAMP)";
    $result = mysqli_query($conn, $query);
    header('Location: bloghomepage.php');
    exit();
  }

  if (isset($_REQUEST["id"])){
    $id = $_REQUEST['id'];

    $query = "SELECT * FROM BLOGPOSTS WHERE ID = '$id'";
    $result = mysqli_query($conn, $query);
  }

  if (isset($_REQUEST["monthvalue"])){
    $monthvalue = $_REQUEST['monthvalue'];

    $query = "SELECT * FROM BLOGPOSTS WHERE MONTHNAME(date) = '$monthvalue'";
    $result = mysqli_query($conn, $query);
    $resultarray = array();

    if(mysqli_num_rows($result) > 0){
      while($row = mysqli_fetch_array($result)){
        $resultarray[] = $row;
      }
      usort($resultarray, 'post_sort');
      }

    else{
      header('Location: bloghomepage.php?info=notfound');
    }
  }

 ?>
