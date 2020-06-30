
<?php
define('SECURE',true);
session_start();
include('login.inc.php');
//print_r($_REQUEST;
$entryID = $_REQUEST['lekikonID'];
$result = $con->query("SELECT title, imgpath, description FROM content WHERE id = " . $entryID);
$response = "<div class='modal-header'>";
while($entry = $result->fetch_assoc()){
      //if(mb_detect_encoding($entry['description'])!='UTF-8'||'ASCII'){$entry['description']=utf8_encode($entry['desciption']);}
      //if(mb_detect_encoding($entry['title']) !='UTF8'||'ASCII'){$entry['title']=utf8_encode($entry['title']);}
      $response .= "<h5 class='modal-title'>" . $entry['title'] . "</h5>";
      $response .= "<button type='button' class='close' data-dismiss='modal' aria-label='Close'><span aria-hidden='true'>&times;</span></button>";
      $response .= "</div>";
      $response .="<div class='modal-body'>";
      $response .="<img src='lekion-img/" .$entry['imgpath'] ."'class='card-img-top' alt='..'>";
      $response .=$entry['description'];
      $response .="<div>";
 } 
        echo $response;
          exit;

 
 ?>
