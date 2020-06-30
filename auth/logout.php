<?php 
/**
 * * Abmeldevorgang 
 * 
 */

 session_start();
 // Destoying All Sessions
 if(session_destroy())
{
      // Redirecting To Home Page
      header("Location: ../index.php");
}
?>
