<?php
  echo "debug1";
  session_start();
  if(!isset($_SESSION['user']))
  {   
    if(isset($_POST['user']))
    {
      $user = htmlspecialchars($_POST['user']);
    }
    if(isset($_POST['pwd']))
    {
      $pwd = htmlspecialchars($_POST['pwd']);
    }
    if(empty($user) || empty($pwd))
    {
      // Redirection vers la page index.php
      header('Location: index.php?page=accueil&error=empty');
    }

    else
    {
      include("connect_bdd.php");

      $req = "SELECT id FROM client WHERE email = '".$user."' AND motdepasse = '".md5($pwd)."';";

      if($result = mysqli_query($link, $req))
      {
        $nb_res = mysqli_num_rows($result);
        if($nb_res == 1)
        {
          $res = $result->fetch_object();
          $_SESSION['user'] = $res->id;
          $_SESSION['index'] = True;
          

          // Redirection vers la page index.php compte
          header('Location: index.php?page=compte');
        }
        else
        {
          // Redirection vers la page index.php
          header('Location: index.php?page=accueil&error=login');
        }
      }
      else
      {
        echo "Error ".mysqli_error($link);
        // Redirection vers la page index.php
        header('Location: index.php?page=accueil&error=bdd');
      }
      mysqli_free_result($result);
    }
  }
?>
