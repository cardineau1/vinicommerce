<h1 class="admin">Inscription</h1>
<article id="formulaire">
  <a href="index.php">Retour</a>
  <form class="admin" id="form" action="index.php?page=p_inscription" method="post">  
    <label class="admin">Email* : </label>
    <input class="admin" type="text" name="email"/>
    <br>
    <label class="admin">Confirmer l'email* : </label>
    <input class="admin" type="text" name="confemail"/>
    <br>
    <label class="admin">Mot de passe* : </label>
    <input class="admin" type="password" name="mdp"/>
    <br>
    <label class="admin">Confirmer le mot de passe* : </label>
    <input class="admin" type="password" name="confmdp"/>
    <br>
    <label class="admin">Civilité* : </label>
    <input type="radio" name="civilite" value="monsieur" checked>Monsieur
    <input type="radio" name="civilite" value="madame">Madame
    <br>
    <label class="admin">Nom* : </label>
    <input class="admin" type="text" name="nom"/>
    <br>
    <label class="admin">Prénom* : </label>
    <input class="admin" type="text" name="prenom"/>
    <br>
    <label class="admin">Date naissance* : </label>
    <input type="date" name="naissance">
    <br>

    <button class="admin" type="submit">Créer mon compte</button>

    <?php
      if(isset($_GET['error']))
      {
        if($_GET['error'] == "1")
        {
          echo("<p class=\"error\">Adresses email différentes.</p>");
        }
        elseif($_GET['error'] == "2")
        {
          echo("<p class=\"error\">Mots de passe différents.</p>");
        }
        elseif($_GET['error'] == "captcha")
        {
          echo("<p class=\"error\">Veuillez remplir le captcha.</p>");
        }
        elseif($_GET['error'] == "0")
        {
          echo("<p class=\"error\">Veuillez remplir les champs obligatoires.</p>");
        }
        elseif($_GET['error'] == "robot")
        {
          echo("<p class=\"error\">Vous êtes un Robot.</p>");
        }
        elseif($_GET['error'] == "3")
        {
          echo("<p class=\"error\">Problème interne au serveur.</p>");
        }
      }
      if(isset($_GET['success']))
      {

        echo("<p class=\"success\">Votre demande à bien été envoyée en validation.</p>");
      }
    ?>
  </form>
</article>
