<h1 class="admin">Inscription</h1>
<article id="formulaire">
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
    <label class="admin">Date* : </label>
    <input type="date" name="naissance">
    <br>

    <button class="admin" type="submit">Créer mon compte</button>
    <button class="admin" type="cancel">Annuler</button>   
  </form>
</article>
