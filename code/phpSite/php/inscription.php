<<<<<<< Updated upstream
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
    <label class="admin">Date naissance* : </label>
    <input type="date" name="naissance">
    <br>

    <button class="admin" type="submit">Créer mon compte</button>
    <br>
    <a href="index.php">Retour</a>
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
=======
<div class="top-content">
    <div class="inner-bg">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2 text">
                    <h1><strong>Vinicommerce</strong> Inscription</h1>
                    <div class="description">
                      <p>
                        Bonjour, content d'accueillir un nouvel utilisateur !
                      </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3 form-box">
                  <div class="form-top">
                    <div class="form-top-left">
                      <h3>Première étape de création de compte</h3>
                        <p>Entrez vos informations personnelles :</p>
                    </div>
                    <div class="form-top-right">
                      <i class="fa fa-lock"></i>
                    </div>
                    </div>
                    <div class="form-bottom">                        
                        <form role="form" action="index.php?page=p_inscription" method="post" class="form-group row">
                      
                          <div class="form-group">
                              <input type="email" name="email" placeholder="Adresse email* ..." class="form-email form-control" id="email">
                          </div>
                          <div class="form-group">
                              <input type="email" name="confemail" placeholder="Confirmation adresse email* ..." class="form-email form-control" id="confemail">
                          </div>                          
                          <div class="form-group">
                              <input type="password" name="mdp" placeholder="Mot de passe* ..." class="form-password form-control" id="mdp">
                          </div>
                          <div class="form-group">
                              <input type="password" name="confmdp" placeholder="Confirmation mot de passe* ..." class="form-password form-control" id="confmdp">
                          </div>
                          <div class="form-group">        
                              <label class="radio-inline">
                                  <input type="radio" name="civilite" value="monsieur" id="monsieur">Monsieur
                              </label>
                              <label class="radio-inline">
                                  <input type="radio" name="civilite" value="madame" id="madame">Madame
                              </label>                  
                          </div>
                          <div class="form-group">
                              <input type="text" name="nom" placeholder="Nom* ..." class="form-control" id="nom">
                          </div>
                          <div class="form-group">
                              <input type="text" name="prenom" placeholder="Prénom* ..." class="form-control" id="prenom">
                          </div>                          
                          <div class="form-group">
                              <input type="date" name="naissance" value="Date de naissance* ..." class="form-control" id="naissance">
                          </div>                          
                        
                          <button type="submit" class="btn">Créer mon compte !</button>  
                          <br>                      
                          <a href="index.php">Retour</a>        
                          
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

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
>>>>>>> Stashed changes
