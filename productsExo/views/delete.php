<?php 
require '../config/config.php';
require '../models/connect.php';
$db = connection();

$id = $_GET["id"];
$sqlRequestDelete = "DELETE FROM products WHERE id=:ids";
$reqDeleteProducts = $db->prepare($sqlRequestDelete);
$reqDeleteProducts->bindParam(':ids',$id);
$reqDeleteProducts->execute();
header('Location: ../products.php'); 