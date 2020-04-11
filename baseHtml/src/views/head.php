<?php

function head()
{
    ?>


<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="index.php">DamienLocation</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="../../index.php">Home<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="src/views/location.php">Location</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="src/views/contact.php">Contact</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="src/views/vendre.php">Vendez</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="src/views/ajouter.php">Ajouter</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="gererMesBiens.php">Gérer</a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="src/views/identification.php">S'identifier</a>
            </li>
        </ul>
    </div>
</nav>

<?php
}
?>