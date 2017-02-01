<?php
  session_start();
  if(!isset($_SESSION['index']))
  {
    header('Location: index.php');
  }
?>

