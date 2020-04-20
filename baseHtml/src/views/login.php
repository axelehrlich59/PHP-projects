<?php

require '../config/config.php';
require '../models/connect.php';

$db = connection();

session_start();
if(isset($_SESSION['login'])){
    $email = $_SESSION['login'];
}else{
    $email = '';
}

$options = [
    'cost' => 12,
];



//INSERT

/*

$sql = "INSERT INTO utilisateur (email, mdp) VALUES ($mdp, $email)";
$reqInsertUser = $db->prepare($sql);
$reqInsertUser->execute();

*/

//SELECT
/*
$sqlSelectUser = "SELECT COUNT(email) FROM utilisateur WHERE mdpUser = :mdp AND mailUser = :email AND idUser = :ids";
$reqSelectUser = $db->prepare($sqlSelectUser);
$reqSelectUser->bindParam(':mdp', $mdp);
$reqSelectUser->bindParam(':email', $email);
$reqSelectUser->bindParam(':ids', $id);
$reqSelectUser->execute();




/*
$options = [
    'cost' => 12,
];
*/
?>


<!doctype html>
<html lang="fr">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title></title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="/">DamienLocation</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
        <?php
            if($email === "marceremus@gmail.com") {
                ?>
            <li class="nav-item active">
                <a class="nav-link" href="../../index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <?php
            }
            ?>
            <li class="nav-item">
                <a class="nav-link" href="location.php">Location</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="vendre.php">Vendez</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="ajouter.php">Ajouter</a>
            </li>
            <?php
            if($email === "marceremus@gmail.com") {
                ?>
            <li class="nav-item">
                <a class="nav-link" href="gererMesBiens.php">Gérer</a>
            </li>
            <?php
            }
            ?>
            <li class="nav-item active">
                <a class="nav-link" href="identification.php">S'identifier</a>
            </li>
        </ul>
    </div>
</nav>

<form class="d-flex justify-content-center mt-5" method="post" action="loginBase.php">

  <div class="form-group">
    <label for="exampleInputEmail1">Adresse émail</label>
    <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
 
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Mot de passe</label>
    <input type="password" class="form-control" name="mdp" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-check">
  </div>


  <div class="d-flex justify-content-center">
<button type="submit" class="btn btn-primary">Créer</button>
</div>

</form>



</body>