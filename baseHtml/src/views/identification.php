<?php

require '../models/connect.php';
require '../config/config.php';


$db = connection();


if (isset($_POST['email']) && isset($_POST['mdp'])) {
    $email = htmlspecialchars(trim($_POST['email']));
    $mdp = htmlspecialchars(trim($_POST['mdp']));
}

$sqlInsertLog = "INSERT into contact (contactMail, mdpContact) values(:mail,:mdp)";
$reqInsertLog = $db->prepare($sqlInsertLog);
$reqInsertLog->bindParam(":mail",$email);
$reqInsertLog->bindParam(":mdp",$mdp);
$reqInsertLog->execute();

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
            <li class="nav-item">
                <a class="nav-link" href="../../index.php">Home <span class="sr-only">(current)</span></a>
            </li>
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
            <li class="nav-item">
                <a class="nav-link" href="gererMesBiens.php">Gérer</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="identification.php">S'identifier</a>
            </li>
        </ul>
    </div>
</nav>

<form class="d-flex justify-content-center mt-5" method="post" action="../../index.php">
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
<button type="submit" class="btn btn-primary">s'inscrire</button>
</div>

</form>



</body>