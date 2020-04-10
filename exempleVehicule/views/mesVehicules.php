<?php
include_once 'elements/head.php';
include_once 'elements/footer.php';
require '../config/config.php';
require '../models/connect.php';

$db = connection();



 var_dump($_POST); 
 if (isset($_POST['model']) && isset($_POST['marque'] )) {
     $model = htmlspecialchars(trim($_POST['model']));
     $marque = htmlspecialchars(trim($_POST['marque']));
 }


 $sqlInsertModel = "insert into modele (nomModele) values(:model)";
 $reqInsertModel = $db->prepare($sqlInsertModel);
 $reqInsertModel->bindParam(":model",$model);
 $reqInsertModel->execute();

 $sqlInsertMarque = "insert into marque (nomMarque) values(:marque)";
 $reqInsertMarque = $db->prepare($sqlInsertMarque);
 $reqInsertMarque->bindParam(":marque",$marque);
 $reqInsertMarque->execute();



head();
?>

    <h1>Liste de mes véhicules</h1>
    <hr>
    <table class="table table-hover mt-5 mb-5">
        <thead class="thead-dark">
        <tr>
            <th>Marque</th>
            <th>Modèle</th>
            <th>ID</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <?php
            foreach ($_POST as $marque=>$model){
            ?>
            <td><?= $marque ?></td>
            <td><?= $model ?></td>
        </tr>
        <?php
        }
        ?>

        </tbody>
    </table>
    <div>
        <a href="Projets php/exempleVehicule/index.php">
            <button type="button" class="btn btn-outline-dark">
                Accueil
            </button>
        </a>
    </div>

<?php
footer();