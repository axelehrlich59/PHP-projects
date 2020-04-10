<?php
require_once 'views/elements/head.php';
require_once 'views/elements/footer.php';

head();
?>
    <h1>Site de mes véhicules</h1>
    <hr>
    <div>

    <form class="form-row mt-5" method="post" action="views/mesVehicules.php">
            <div class="form-group col-lg-6">
                <label for="model">Le modèle</label>
                <input type="text" class="form-control" id="model" name="model">
            </div>
            <div class="form-group col-lg-6">
                <label for="marque">La marque</label>
                <input type="text" class="form-control" id="marque" name="marque">
            </div>
            <br>
            <button type="submit" class="btn btn-outline-dark">Envoyer</button>
        </form>
   

    </div>
 <?php
footer();