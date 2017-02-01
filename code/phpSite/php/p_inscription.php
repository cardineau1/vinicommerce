<?php
  echo 'erreur1';
  $erreur = 0;
  if(isset($_POST['email']) && isset($_POST['confemail']))
  {
    if($_POST['email'] == $_POST['confemail'])
    {
      $email = $_POST['email'];
    }
    else
    {
      $erreur = 1;
    }
  }
  if(isset($_POST['mdp']) && isset($_POST['confmdp']))
  {
    if($_POST['mdp'] == $_POST['confmdp'])
    {
      $mdp = $_POST['mdp'];
    }
    else
    {
      $erreur = 2;
    }
  }
  if(isset($_POST['civilite']))
  {
    if($_POST['civilite'] == 'monsieur')
    {
      $civilite = 'H';
    }
    elseif($_POST['civilite'] == 'madame')
    {
      $civilite = 'F';
    }
    else
    {
      $civilite = '';
    }
  }
  if(isset($_POST['nom']))
  {
    $nom=$_POST['nom'];
  }
  if(isset($_POST['prenom']))
  {
    $prenom=$_POST['prenom'];
  }
  if(isset($_POST['naissance']))
  {
    $dateNaissance = $_POST['naissance'];
  }

echo 'erreur2';

  if(empty($email) || empty($mdp) || empty($civilite) || empty($nom) || empty($prenom) || empty($dateNaissance))
  {
    // Redirection vers la page index.php
    header('Location: index.php?page=inscription&error=0#form');
  }
  elseif($erreur == 1)
  {
    header('Location: index.php?page=inscription&error=1');
  }
  elseif($erreur == 2)
  {
    header('Location: index.php?page=inscription&error=2');
  }
  else
  {
    include("connect_bdd.php");

    $req = "INSERT INTO client (nom, prenom, dateNaissance, civilite, email, motdepasse) VALUES ('".$nom."', '".$prenom."', '".$dateNaissance."', '".$civilite."', '".$email."', '".md5($mdp)."');";

    if(mysqli_query($link, $req))
    {
      // Redirection vers la page index.php
      header('Location: index.php?page=inscription&success#form');
    }
    else
    {
      echo "Error ".mysqli_error($link);
      // Redirection vers la page index.php
      header('Location: index.php?page=inscription&error=3');
    }
    mysqli_close($link);
  }
?>
