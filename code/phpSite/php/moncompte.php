<?php
  include("connect_bdd.php");
  global $link;
?>

<h1>Mon Compte</h1>

<article>
  <div class="container">
    <h2>Transactions</h2>
    <table class="transactions table table-hover">
      <thead>
        <tr class="transactions">
          <th class="transactions" id="num">Numéro de commande</th>
          <th class="transactions" id="date">Date</th>
          <th class="transactions" id="type">Type</th>
          <th class="transactions" id="adresse">Adresse</th>
          <th class="transactions" id="cb">Carte</th>
          <th class="transactions" id="montant">Montant</th>
        </tr>
      </thead>
      <tbody>
        <?php
          $request = "SELECT `transaction`.id, `transaction`.date, `typeTransaction`.libelle as trlib, `adresse`.libelle as adlib, `carteDePaiement`.libelle as cblib, `transaction`.montant
    FROM `transaction`, `typeTransaction`, `adresse`, `carteDePaiement`
    WHERE `transaction`.id_client=".$_SESSION['user']." AND `transaction`.id_typeTransaction=`typeTransaction`.id AND `transaction`.id_adresse=`adresse`.id AND `transaction`.id_carteDePaiement=`carteDePaiement`.id ORDER BY date DESC";
          if ($result = mysqli_query($link, $request))
          {
            while($ligne = $result->fetch_object())
            {
              echo("<tr class=\"transactions\">");
              echo("<td class=\"transactions\">".$ligne->id."</td>");
              $date = new DateTime($ligne->date);
              echo("<td class=\"transactions\">".$date->format('d/m/Y H:m:s')."</td>");
              echo("<td class=\"transactions\">".$ligne->trlib."</td>");
              echo("<td class=\"transactions\">".$ligne->adlib."</td>");
              echo("<td class=\"transactions\">".$ligne->cblib."</td>");
              echo("<td class=\"transactions\">".$ligne->montant." €</td>");
              echo("</tr>");
            }
          }
        ?>
      </tbody>
    </table>
  </div>
</article>

<article>
<h2>Informations client</h2>

</article>

<article>
  <div class="container">
    <h2>Cartes</h2>
    <form action="index.php?page=compte&onglet=actions" method="post">
      <table class="cartes table table-hover">
        <thead>
          <tr class="cartes">
            <th class="cartes" id=\"select\"></th>
            <th class="cartes" id=\"lib\">Libellé</th>
            <th class="cartes" id=\"numcb\">Numéro</th>
            <th class="cartes" id=\"dateexp\">Date d'expiration</th>
          </tr>
        </thead>
        <tbody>
          <?php
            $i = 0;
            $request = "SELECT `carteDePaiement`.id as idcb, libelle, numero, dateExpiration
      FROM `carteDePaiement`, `lienClientCarte`, `client`
      WHERE `carteDePaiement`.id=`lienClientCarte`.id_carteDePaiement AND `client`.id=`lienClientCarte`.id_client AND `client`.id=".$_SESSION['user'];
            if ($result = mysqli_query($link, $request))
            {
              while($ligne = $result->fetch_object())
              {
                echo("<tr class=\"transactions\">");
                echo("<td class=\"transactions\"><input class=\"transactions\" type=\"checkbox\" name=\"cb".$i."\" value=\"".$ligne->idcb."\"></td>");
                echo("<td class=\"transactions\">".$ligne->libelle."</td>");
                echo("<td class=\"transactions\">".$ligne->numero."</td>");
                $date = new DateTime($ligne->dateExpiration);
                echo("<td class=\"transactions\">".$date->format('m/Y')."</td>");
                echo("</tr>");
                $i++;
              }
            }
            echo("<input type=\"hidden\" name=\"nb\" value=\"".$i."\">");
          ?>
        <tbody>
      </table>  
      <div class="actions">
        <button class="cartes" name="ajouter" type="submit">Ajouter</button>
        <button class="cartes" name="supprimer" type="submit">Supprimer</button>
      </div>
    </form>
  </div>
</article>

<?php
  /* Libération du jeu de résultats */
  mysqli_free_result($result);
  mysqli_close($link);
?>
