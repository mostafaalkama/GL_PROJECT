<?php 

include("connexion.php");

extract($_POST);

$req = $bdd->prepare('INSERT INTO user(nom, prenom, age) VALUES(:nom, :prenom, :age)');


$req->execute(array(
	':nom' => $nom,
	':prenom' => $prenom,
	':age' =>$age,
	
	
	));

echo 'L’utilisateur a bien été ajouté !';






 ?>