# vinicommerce
Projet de gestion de clientèle
Lien vers le git : https://github.com/cardineau1/vinicommerce.git
# Introduction
But du projet : créer un système de gestion de clients avec une notion de sécurité (client, CB ou carte de fidélité avec un solde associé, chiffrement, paiement : y a t il assez d’argent sur la carte, test pour ajout d’une carte valide ou non, BDD).

Nous décidons d’utiliser Python 3 comme langage de programmation avec une base de données SQLite

<b> Une carte est valide si :</b><br> 
Date non expirée, numéro correct, etc?

<b> Un client peut payer si :</b><br>
Carte valide, solde supérieur au montant de la commande, client non bloqué …
Engendre un historique de transaction.

<b>Un client peut se connecter si :</b><br>
Username et mdp corrects, client non blacklisté.
Engendre un historique de connexion.


Et si quelqu’un veut modifier le code source pour altérer le fonctionnement de l’application :
→ nous ne distribuons que le fichier *.pyc qui contient le code compilé (à voir si on peut ajouter une vérification du checksum).

Attention : Injection SQL, java, décompilation du code, modification du binaire, gros nombre de connexion (attaque Ddos), attaque man in the middle, cas de fausse requête (trop ou pas assez de paramètres sur une fonction, champ vide, donnée trop longue, caractère spéciaux).


<b>Principe de fonctionnement</b><br>
Serveur HTTPS qui héberge un simple site web qui contient en partie un formulaire d’authentification ou de création de compte → envoie des data de connexion (traitement par un script python) → lien avec la bdd sqlite → retourne la page connectée

(A venir : Ajout de la gestion de cartes bleue pour chaque client)

Ajout de Regex pour tester les chaînes de caractères.

http://www.celenium.com/


