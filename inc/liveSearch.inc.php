<?php

error_reporting(E_ALL);
ini_set('display_errors',1);

include('login.inc.php');

//print_r($_REQUEST);

$q=$_REQUEST["term"];

if(isset($q)){

      //Prepare a select statement
      $result=$con->query("SELECT * FROM content WHERE title LIKE '%".$q."%'
      OR description LIKE '%".$q."%'");
      if(mysqli_num_rows($result)>0 ){
            //Fetch result rows as an associative array
            while($row=$result->fetch_assoc()){
                  if(mb_detect_encoding($row['title']) !='UTF-8' || 'ASCII'){$row
                  ['title']=utf8_encode($row['title']);}
                  echo'<a class="nav-link" href="#';
                  echo $row['id'].'">';
                  echo $row['title'];
                  echo'/a>';
            }
            } else {
                  echo "<p>No Match found</p>";
            }
      } else{
                echo "ERROR: Could not able to execute $sql. ". mysqli_error($con);
      }
      
      // close connection
      $con->close();
      ?>
           