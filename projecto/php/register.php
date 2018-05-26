<?php 


if ( isset($_POST['register'])){
include("connexion.php");

extract($_POST);


$req = $bdd->prepare('INSERT INTO user(nom, prenom, email,password) VALUES(:nom, :prenom, :email, :password)');


$req->execute(array(
	':nom' => $nom,
	':prenom' => $prenom,
	':email' =>$email,
	':password' =>$password,
	
	
	));

header('location:../projecto.html');

}
elseif (isset($_POST['connexion'])) {

include("connexion.php");

extract($_POST);

$reponse = $bdd->prepare('SELECT *  FROM user where nom =? and password=? ');
$query->execute(array($nom,$password));

 if($reponse->rowCount() > 0) {

	echo "good";


}

}