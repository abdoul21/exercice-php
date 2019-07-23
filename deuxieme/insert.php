<?php
  $login = $_GET['login'];
  $mdp = $_GET['pass'];
  $connect = mysql_connect('localhost','toto','toto') or die ("erreur de connexion");//connexion au serveur
  mysql_select_db('utilisateur') or die ("erreur de connexion base");//selection de la base de données
  $req = " INSERT INTO utilisateur (login, password) VALUES ('$login','$mdp');";
  echo $req; // tester la requete sur phpmyadmin
  mysql_query($req);
  echo "utilisateur ajouté"; // vérifier avec phpmyadmin
?>