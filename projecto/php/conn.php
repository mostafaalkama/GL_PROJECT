<?php 

session_start();


include("connexion.php");

if(isset($_POST['connexion'])){
$user = $_POST['username'];
$pass =$_POST['password'];
$messeg = "";

if(empty($user) || empty($pass)) {
    $messeg = "Username/Password con't be empty";
} else {
    $sql = "SELECT nom, password FROM user WHERE nom=? AND 
  password=? ";
    $query = $bdd->prepare($sql);
    $query->execute(array($user,$pass));

    if($query->rowCount() > 0) {
        $_SESSION['user'] = $user;
        $_SESSION['time_start_login'] = time();
        header("location: ../projecto.php");
    } else {
         header("location: error.php");
    }
}
}

 ?>