<?php 
require '../config/config.php';
require '../models/connect.php';
$db = connection();

//var_dump($_GET);
$id = $_GET["id"];
$sqlRequestDelete = "DELETE FROM vente WHERE idVente=:ids";
$reqDeleteProducts = $db->prepare($sqlRequestDelete);
$reqDeleteProducts->bindParam(':ids',$id);
$reqDeleteProducts->execute();
header('Location: gererMesBiens.php'); 