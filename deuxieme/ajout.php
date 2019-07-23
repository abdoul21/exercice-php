<?php
$req = $bdd->prepare('INSERT INTO utilisateur(login,password)VALUES(:login,:password,:)');
$req->execute(array(
    'login' => $login,
    'password' =>$mdp,
));
echo'pisse';
?>