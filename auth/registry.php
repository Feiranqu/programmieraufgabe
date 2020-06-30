
      <?php
// session_start();
require_once('inc/login.inc.php');
?>

      <?php
$showFormular = true;
if(isset($_GET['register'])){
      $error = false;
      $username = trim(htmlspecialchars($_REQUEST['username']));
      $email = trim(htmlspecialchars($_REQUEST['email']));
      $password = trim(htmlspecialchars($_REQUEST['password']));
      $password2 = trim(htmlspecialchars($_REQUEST['password2']));

      if(!filter_var($email,FILTER_VALIDATE_EMAIL)) {
            echo 'Bitte eine gültige email-Adresse eingeben</br>';
            $error =true;
      }
     
      if(strlen($password) == 0) {
            echo 'Bitte ein Passwort eingeben</br>';
      }
      if($password != $password2) {
            echo 'Die Passwörter müssen übereinstimmen</br>';
            $error = true;
      }
      // Überprüfe dass die email-adresse noch nicht registriert wurde
      if(!$error) {
            $result=$con->query("SELECT * FROM user WHERE email='" . $email ."'");
            // $result->execute();
            if($result->num_rows) {
                  echo '<p class="bg-danger text-white vm-4 p-3 text-center">Diese E-Mail-Adresse ist bereits vergeben</p>';
                  $error = true;
            }
      }
     
      // Keine Fehler wir können den nutzer registrieren
      if(!$error) {
            var_dump($_REQUEST);
            $sql = "INSERT INTO user (email,username, password ) VALUES ('$email','$username','".md5($password)."')";
            $result = $con->query($sql);
            var_dump($result);
            if($result){
                  echo 'Du wurdest erfolgreich registriert.<a href="login.php">Zum Login</a>';
                  $showFormular=false;
            } else {
                  echo '<p class="bg-danger m-5 text-center">Beim Abspeichern ist leider ein Fehler aufgetreten</p>';
            }
      }
      
}
// var_dump($showFormular);
      // if($showFormular) { ?>



      <!-- <?php //}  // Ende vom if ($showformular) ?> -->
     
