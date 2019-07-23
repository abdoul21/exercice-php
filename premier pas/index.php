<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <title>utilisateur</title>
</head>
<body >
<?php
try
{
	// On se connecte à MySQL
	$bdd = new PDO('mysql:host=localhost;dbname=MonProjetFormidable;charset=utf8', 'abdou', 'Simplon.974');
}
catch(Exception $e)
{
	// En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
}

// Si tout va bien, on peut continuer

// On récupère tout le contenu de la table utilisateur
$reponse = $bdd->query('SELECT * FROM MonProjetFormidable');

// On affiche chaque entrée une à une
while ($donnees = $reponse->fetch())
{

  
?>
 <div  class="container" style="width: 18rem;">
  <img src="GIFs_With_Sound_136_HD_1.gif" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?php echo $donnees['nom']; ?><br><?php echo $donnees['prenom']; ?></h5>
    <p class="card-text"><?php echo $donnees['age']; ?></p><br>
    <p class="card-text">email<br><?php echo $donnees['email']; ?></p><br>
    <a href="#" class="btn btn-primary">click pour le vraie</a>
  </div>
</div><br>

<?php
}
$reponse->closeCursor(); // Termine le traitement de la requête

?>
</body>

</html>