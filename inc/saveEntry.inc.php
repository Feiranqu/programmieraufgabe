<?php

//print_r($_REQUEST);
//echo">/br>\n";
//print_r($_FILES);

$title =$_REQUEST['title'];
$teaser =$_REQUEST['teaser'];
$description =$_REQUEST['description'];

if($_FILES) {
      $file =$_FILES['fileUpload']['name'];
} else {
      $file= NULL;
}

$target_dir = "../lexikon-img/";
$uploadOK =1;
$target_file =$target_dir .basename($_FILES["fileUpload"]["name"]);
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is aactual image or fake
if(isset($POST["submit"])) {
      $check= getimagesize($_FILES["fileUpload"]["temp_name"]);
     if( $check !== false) {
            echo "File is an image -". $check["mine"] .".";
            $uploadOKL=1;
      } else {
            echo "File is notz aimage.";
            $uploadOK=0;
            
      }
}

//Allow certain file formats
if($imageFileType != "jpg"&& $imageFileType !="png" &&$imageFileType !="jpeg" && $imageFileType!= "gif"){
      echo"Sorry ,only JPG,PNG;&GIF files are allowed.";
      $uploadOK=0;
}

// Check if $upload is set to 0 by an error
if($uploadOK==0){
      echo"Sorry, your file was not uploaded.";

 // if everything is ok try to upload file
} else {
      if(move_uploaded_file($_FILES["fileupload"]["tmp_name"], $tartget_file)) {  
            echo "The file".basename( $_FILES["fileUpload"]["name"])."has been uploaded.";
      } else {
            echo "Sorry, there was an error uploading your file.";
      }
}
//echo $target_file,$imageFileType;
include('login.inc.php');

$con->query("INSERT INTO content(title,teaser, description ,impath) VALUE ('$title','$teaser','$descripion','$file')");
$con->close();

//redirect

if(isset($_SERVER["HTTP_REFERER"])){
      header("Location:{$_SERVER["HTTP_REFERER"]}");
}