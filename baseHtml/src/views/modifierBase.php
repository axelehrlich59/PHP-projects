<?php 
require '../config/config.php';
require '../models/connect.php';

$db = connection();



if(isset($_POST['id'])) {
    $id = htmlspecialchars(trim($_POST['id']));
}
else {
    $id = '';
}

if(isset($_POST['titre'])) {
    $titre = htmlspecialchars(trim($_POST['titre']));
}
else {
    $titre = '';
}

if(isset($_POST['prix'])) {
    $prix = htmlspecialchars(trim($_POST['prix']));
}
else {
    $prix = '';
}

if(isset($_POST['email'])) {
    $email = htmlspecialchars(trim($_POST['email']));
}
else {
    $email = '';
}

if(isset($_POST['photo'])) {
    $photo = htmlspecialchars(trim($_POST['photo']));
}
else {
    $photo = '';
}

$sqlUpdate = "UPDATE vente set nomVente = :titre, prixVente = :prix, emailVente = :email, photoVente = :photo where idVente = :ids ";
$reqUpdate = $db->prepare($sqlUpdate);
$reqUpdate->bindParam(':titre',$titre);
$reqUpdate->bindParam(':prix',$prix);
$reqUpdate->bindParam(':email',$email);
$reqUpdate->bindParam(':photo',$photo);
$reqUpdate->bindParam(':ids',$id);
$reqUpdate->execute();

if($reqUpdate->rowCount()==1) {
    header('location: gererMesBiens.php');
}
?>

<?else {    ?>
    <div class="alert alert-danger" role="alert">
  La modification n'as pas été prise en compte. Réessayez !
</div>   
}

