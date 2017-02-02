
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<style type="text/css">
	.navbar{
		margin-top: 20px;
	}
</style>

<div class="container">
    <nav role="navigation" class="navbar navbar-inverse">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="#" class="navbar-brand">Vinicommerce</a>
        </div>
        <!-- Collection of nav links, forms, and other content for toggling -->
        <div id="navbarCollapse" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
            
            <?php
               $page = "accueil" ; 
               if(isset($_GET['page']))
               {
                  $page = $_GET['page'];
               }

               if($page == "produits")
               {
                  echo("<li><a class=\"active\" href=\"index.php?page=compte\">Accueil</a></li>");
                  echo("<li><a href=\"index.php?page=compte&onglet=produit\">Produits</a></li>");
                  echo("<li><a href=\"index.php?page=compte&onglet=moncompte\">Mon comte</a></li>");
                  echo("<li><a href=\"index.php?page=compte&onglet=monpanier\">Mon panier</a></li>");
               }
               else if($page == "monCompte")
               {
                  echo("<li><a href=\"index.php?page=compte\">Accueil</a></li>");
                  echo("<li><a class=\"active\" href=\"index.php?page=compte&onglet=produit\">Produits</a></li>");
                  echo("<li><a href=\"index.php?page=compte&onglet=moncompte\">Mon comte</a></li>");
                  echo("<li><a href=\"index.php?page=compte&onglet=monpanier\">Mon panier</a></li>");
               }
               else if($page == "monPanier")
               {
                  echo("<li><a href=\"index.php?page=compte\">Accueil</a></li>");
                  echo("<li><a href=\"index.php?page=compte&onglet=produit\">Produits</a></li>");
                  echo("<li><a class=\"active\" href=\"index.php?page=compte&onglet=moncompte\">Mon comte</a></li>");
                  echo("<li><a href=\"index.php?page=compte&onglet=monpanier\">Mon panier</a></li>");
               }
               else
               {
                  echo("<li><a href=\"index.php?page=compte\">Accueil</a></li>");
                  echo("<li><a href=\"index.php?page=compte&onglet=produit\">Produits</a></li>");
                  echo("<li><a href=\"index.php?page=compte&onglet=moncompte\">Mon comte</a></li>");
                  echo("<li><a class=\"active\" href=\"index.php?page=compte&onglet=monpanier\">Mon panier</a></li>");    
               }
            ?>

            </ul>
          
            <ul class="nav navbar-nav navbar-right">
                <li><a href="index.php?page=deconnexion">Se déconnecter</a></li>
            </ul>
        </div>
    </nav>
</div>
                              	