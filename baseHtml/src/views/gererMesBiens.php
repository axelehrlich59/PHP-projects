<? 

require 'models/connect.php';
require 'config/config.php';


$db = connection();

var_dump($_POST); 
if (isset($_POST['titre']) && isset($_POST['prix'])) {
    $titre = htmlspecialchars(trim($_POST['titre']));
    $prix = htmlspecialchars(trim($_POST['prix']));
}


$sqlInsertTitre = "insert into vente (nomVente) values(:titre)";
$reqInsertTitre = $db->prepare($sqlInsertTitre);
$reqInsertTitre->bindParam(":titre",$titre);
$reqInsertTitre->execute();


$sqlInsertPrix = "insert into vente (prixVente) values(:prix)";
$reqInsertPrix = $db->prepare($sqlInsertPrix);
$reqInsertPrix->bindParam(":prix",$prix);
$reqInsertPrix->execute();





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
<body class='h-100'>

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
            <li class="nav-item ">
                <a class="nav-link" href="ajouter.php">Ajouter</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="gererMesBiens.php">Gérer</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="identification.php">S'identifier</a>
            </li>
        </ul>
    </div>
</nav>

        <?php  
            foreach ($_POST as $titre=>$prix){
        ?>

<td><?= $titre ?></td>
            <td><?= $prix ?></td>
        </tr>
        <?php
        }
        ?>

</body>