<?php
  if($_POST['nb'] > 0)
  {
    include("connect_bdd.php");

    for($i=0;$i<$_POST['nb'];$i++)
    {
      if(isset($_POST['cb'.$i]))
      {
        if (isset($_POST['ajouter']))
        {
          $req = "UPDATE DII5_21406725_COMMENTAIRE SET VALIDATION = 1 WHERE DATEHEURE = '".$_POST['comm'.$i]."'";
        }
        elseif (isset($_POST['supprimer']))
        {
          $req = "DELETE FROM lienClientCarte WHERE id_carteDePaiement = ".$_POST['cb'.$i];
          if(mysqli_query($link, $req))
          {
            echo "Done";
          }
          else
          {
            echo "Error ".mysqli_error($link);
          }
        }
      } 
    }
    mysqli_close($link);
  }

  // Redirection vers la page index.php
  header('Location: index.php?page=compte&onglet=moncompte');
?>
