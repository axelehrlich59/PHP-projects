<?php 
require '../config/config.php';
require '../models/connect.php';

$db = connection();


if(isset($_GET['id'])){
    $id = htmlspecialchars(trim($_GET['id']));
}else{
    $id = "";
}
?>

<?php


$sqlVente = "SELECT * FROM vente";

$reqVente = $db->prepare($sqlVente);
$reqVente->bindParam(':ids', $id);
$reqVente->execute();

while($vente = $reqVente->fetchObject()) {

?>




<!doctype html>
<html lang="fr">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>

<form method="post" action="gererMesBiens.php">    

                <div class="form-group col-md-5 mt-4">
                    <label for="formGroupExampleInput">Titrez votre annonce :</label>
                    <input type="text" class="form-control" name="titre" id="modifTitre"  value="<?= $vente->modifTitre; ?>" placeholder="Exemple : belle maison au coin du jardin">
                </div>
                <div class="form-group col-md-2 mt-4">
                    <label for="formGroupExampleInput">Prix :</label>
                    <input type="number" class="form-control" name="prix" id="modifPrix" value="<?= $vente->modifPrix; ?>" placeholder="500$">
                </div>
                <div class="form-group col-md-5 mt-4">
                    <label for="formGroupExampleInput2">Email :</label>
                    <input type="text" class="form-control" name="email" id="modifEmail" value="<?= $vente->modifEmail; ?>" placeholder="Exemple : tarteàlacrème@gravier.com">
                </div>
                
                <div class="form-group col-md-5 mt-4">
                    <label for="exampleFormControlFile1">Sélectionnez une photo :</label>
                    <input type="file" class="form-control-file" name="photo" id="modifPhoto" value="<?= $vente->modifPhoto; ?>">
                </div>

                <button type="submit" class="btn btn-secondary ml-3 mt-4">Valider</button>

            </form>

            </body>

            <?php
     }
?>