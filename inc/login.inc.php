<?php

     $host='localhost';
     $pw='';
     $username='root';
     $db='programmieraufgabe'; 

/* Verbindung aufnehmen und Datenbank auswählen */
$con = new mysqli($host, $username, $pw, $db);

/*Damit ich eine Meldung bekomme, falls die Verbingung nicht funktioniert*/
if($con->connect_errno) {
      printf("Connect failed: %s\n", $con->connect_error);
      exit();
}
?>