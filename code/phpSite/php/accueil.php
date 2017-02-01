<?php
  session_start();
  session_destroy();
?>
    <!-- Top content -->
    <div class="top-content">
      
        <div class="inner-bg">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2 text">
                        <h1><strong>Vinicommerce</strong> Connexion</h1>
                        <div class="description">
                          <p>
                            Bienvenue sur le site Vinicommerce !
                          </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3 form-box">
                      <div class="form-top">
                        <div class="form-top-left">
                          <h3>Connectez vous à notre site</h3>
                            <p>Entrez votre nom d'utilisateur et votre mot de passe :</p>
                        </div>
                        <div class="form-top-right">
                          <i class="fa fa-lock"></i>
                        </div>
                        </div>
                        <div class="form-bottom">
                      <form role="form" action="index.php?page=p_accueil" method="post" class="login-form">
                      
                        <div class="form-group">
                          <label class="sr-only" for="form-username">Nom d'utilisateur</label>
                            <input type="text" name="user" placeholder="Nom d'utilisateur..." class="form-username form-control" id="form-username">
                          </div>
                          <div class="form-group">
                            <label class="sr-only" for="form-password">Mot de passe</label>
                            <input type="password" name="pwd" placeholder="Mot de passe..." class="form-password form-control" id="form-password">
                          </div>
                          <button type="submit" class="btn">Se connecter !</button>
                          
                          
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
                    </div>
                  </div>
                </div>
                <div>
                  Je n'ai pas de compte, j'aimerais <a href="index.php?page=inscription"><strong>remplir le formulaire d'inscription</strong></a>
                </div>
                <!--<div class="row">
                    <div class="col-sm-6 col-sm-offset-3 social-login">
                      <h3>...ou se connecter avec:</h3>
                      <div class="social-login-buttons">
                        <a class="btn btn-link-2" href="#">
                          <i class="fa fa-facebook"></i> Facebook
                        </a>
                        <a class="btn btn-link-2" href="#">
                          <i class="fa fa-twitter"></i> Twitter
                        </a>
                        <a class="btn btn-link-2" href="#">
                          <i class="fa fa-google-plus"></i> Google Plus
                        </a>
                      </div>
                    </div>
                </div>-->
            </div>
        </div>
        
    </div>
    
    <!--[if lt IE 10]>
        <script src="assets/js/placeholder.js"></script>
    <![endif]-->
