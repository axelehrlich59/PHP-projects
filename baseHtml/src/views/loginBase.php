<?php

require '../config/config.php';
require '../models/connect.php';

$db = connection();

session_start();


if(isset($_POST['email'])) {
$email = htmlspecialchars(trim($_POST['email']));
}

if(isset($_POST['mdp'])){
    $mdp = password_hash(htmlspecialchars(trim($_POST['mdp'])), PASSWORD_BCRYPT);
}else{
    $mdp = '';
}

//INSERT

$sql = "INSERT INTO utilisateur (mailUser, mdpUser) VALUES (':email', ':mdp')";
$reqInsertUser = $db->prepare($sql);
$reqInsertUser->execute();

$retureMDP = $reqInsertUser->fetchObject();




if($retureMDP ===1 ){
    echo 'OK';
}else{
    echo 'Not ok';
} 
