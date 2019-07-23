<?php

$connect = mysql_connect('localhost','toto','toto') or die ("erreur de connexion");
mysql_select_db('utilisateur') or die ("erreur de connexion base");//selection de la base de données
 
$req = "SELECT * FROM UTILISATEUR ;";
$result = mysql_query($req);
 
while ( $ligne=mysql_fetch_assoc($result)){
 $id = $ligne['id'];
$login = $ligne['login'];
$passwd = $ligne['password'];
echo $id.' : ' .$login.' : '.$passwd.'<br />';
}
?>