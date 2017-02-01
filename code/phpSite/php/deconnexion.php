<?php
  session_start();
  session_destroy();
  // Redirection vers la page index.php
  header('Location: index.php');
?>
