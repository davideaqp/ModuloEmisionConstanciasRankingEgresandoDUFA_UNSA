<?php
  session_start();
  $_SESSION['username'] = 'Pedro';
  header("Location:panel.php");

?>
