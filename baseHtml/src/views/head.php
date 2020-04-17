<?php

function head()
{
    ?>
<?php
session_start();

if(isset($_SESSION['login'])){
    $email = $_SESSION['login'];

}else{
    $_SESSION['login'] = $_POST['email'];
    $email = $_SESSION['login'];

}

?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="index.php">DamienLocation</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
        <?php
            if($email === "marceremus@gmail.com") {
                ?>
            <li class="nav-item active">
                <a class="nav-link" href="../../index.php">Home<span class="sr-only">(current)</span></a>
            </li>
            <?php
            }
            ?>
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
            <?php
            if($email === "marceremus@gmail.com") {
                ?>
            <li class="nav-item">
                <a class="nav-link" href="src/views/gererMesBiens.php">Gérer</a>
            </li>
            <?php
            }
            ?>
            <li class="nav-item ">
                <a class="nav-link" href="src/views/identification.php">S'identifier</a>
            </li>
            <?php
            if($email === "marceremus@gmail.com") {
                ?>
                 <li class="nav-item active">
                    <a class="nav-link" href="src/views/logout.php">Logout</a>
                </li>
                <?php
            }
            ?>
        </ul>
    </div>
</nav>

<?php
}
?>