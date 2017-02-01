<?php
  session_start();
  if(!isset($_SESSION['index']))
  {
    header('Location: index.php');
  }

  if(!isset($_GET['onglet']))
  {
    echo "<article>";
    echo "Bienvenue sur votre espace.";
    echo "</article>";
  }
  else
  {     
    include("php/".$_GET['onglet'].".php");
  }
?>

