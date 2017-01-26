<!DOCTYPE html>
<html lang="fr">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <title>Vinicommerce</title>
</head>

<body>
  <?php
    //include("php/header_nav.php");
  ?>

  <article>
    <?php
      if(!isset($_GET['page']))
      {
        include("php/accueil.php");
      }
      else
      {
        include("php/".$_GET['page'].".php");
      }
    ?>
  </article>

  <?php #include("html/footer.html"); ?>
</body>
</html>
