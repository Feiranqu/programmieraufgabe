<?php session_start();

require_once('../inc/login.inc.php');?>

<?php

/**
 *  Anmeldevorgang
 */


if(isset($_GET['login'])) {
      $username = trim(htmlspecialchars($_POST['username']));
      $password = trim(htmlspecialchars($_POST['password']));


      //Benutzereingaben Validieren 
      if(!empty($username) && !empty($password)) {
            $query = $con->prepare('SELECT username FROM user WHERE username = ?
             AND password = ?');
            $password_hash = md5($password);
            $query->bind_param('ss', $username,  $password_hash);
            $query->execute();
            $query->store_result();
            $query->bind_result($username);
            print_r($query);
            if($query->num_rows != 1) {
                  // echo "hallo";
                  $error = 'Ihre Anmeldedaten sind nicht korrekt. Bitte wiederholen Sie Ihre Eingabe.';
                  header("Location: ../index.php");
            }  else {
                  var_dump($username);
                  $_SESSION['username'] = $username;
                  // Redirect user to Index.php
                  header("Location: ../picture.php");
            }
      } else {
            $error = 'Bitte f&uuml;llen Sie alle Felder korrekt aus.';
      }
} else {
      $error = NULL;
      $email = NULL;
}
?>