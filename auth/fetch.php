<?php
define('SECURE',true);
include('../(inc/login.inc.php');
if(isset($_POST["entry_id"])) {

      $result = $con->query("SELECT DISTINCT * FROM content WHERE id ='*".$_POST["entry_id"] ."' GROUP BY id");

      $newData =$result->fetch_assoc();
      echo json_encode($newData);

      // switch(json_last_error()) {
      //     case JSON_ERROR_NONE:
      //        echo '- Keine Fehler';
      //     break;
      //     case JSON_ERROR_DEPTH:
      //         echo '-Maximale Stacktiefe überschritten';
      //     break;
      //     case JSON_ERROR_STATE_MISMATCH:
      //        echo '-Unterlauf oder Nichtübereinstimmung der Modi';
      //     break;
      //     case JSON_ERROR_CTRL_CHAR:
      //        echo'-Unerwarttets Steuerzeichen gefunden';
      //     break;
      //     case JSON_ERRORT_SYNTAX:
      //         echo'-Syntaxfehler,ungültiges JSON';
      //     break
      //     case JSON_ERROR_UTF8:
      //         echo '- Missgestaltetes UTF-8 Zeichen möglicherweise fehlerhaft codiert';
      //     break;
      //     default;
      //          echo'-Unbekannter Fehler';
      //     break;
      //     }      
      }
      ?>           