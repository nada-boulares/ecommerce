<?php
 session_start();       //demarer session
  session_unset();                  //effacer les variables sessions
  session_destroy(); //effecer session

header('location:index.php');
?>