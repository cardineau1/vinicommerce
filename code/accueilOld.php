

<h1 class="admin">Connexion</h1>
<article id="formulaire">
  <form class="admin" id="form" action="index.php?page=p_accueil" method="post">  
    <label class="admin">Username : </label>
    <input class="admin" type="text" name="user"/>
    <label class="admin">Password : </label>
    <input class="admin" type="password" name="pwd"/>
    <button class="admin" type="submit">Connecter</button>
    <?php
      if(isset($_GET['error']))
      {
        if($_GET['error'] == "login")
        {
          echo("<p class=\"error\">Mauvais identifiants.</p>");
        }
        elseif($_GET['error'] == "empty")
        {
          echo("<p class=\"error\">Veuillez remplir les champs.</p>");
        }
        elseif($_GET['error'] == "bdd")
        {
          echo("<p class=\"error\">Problème interne au serveur.</p>");
        }
      }
    ?>
  </form>
  <?php
    session_start();
    if(isset($_SESSION['user']))
    {
    echo "<a href=\"index.php?page=compte\">Mon compte</a>";
    echo "<a href=\"php/deconnexion.php\">Déconnnexion</a>";
    }
  ?>
  <br>
  <a href="index.php?page=inscription">S'inscrire</a>
</article>
