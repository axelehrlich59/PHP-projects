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
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="../../index.html">DamienLocation</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="location.php">Location</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="vendre.php">Vendez</a>
            </li>
        </ul>
    </div>
</nav>

    <div class="container-fluid h-auto mt-3 d-flex justify-content-center">
        <h1>Vous voulez vendre votre maison ? </h1>
    </div>

            <form>
                <div class="form-group col-md-5 mt-4">
                    <label for="formGroupExampleInput">Titrez votre annonce :</label>
                    <input type="text" class="form-control " id="formGroupExampleInput" placeholder="Exemple : belle maison au coin du jardin">
                </div>
                <div class="form-group col-md-2 mt-4">
                    <label for="formGroupExampleInput">Prix :</label>
                    <input type="number" class="form-control " id="formGroupExampleInput2" placeholder="500$">
                </div>
                <div class="form-group col-md-5 mt-4">
                    <label for="formGroupExampleInput2">Email :</label>
                    <input type="text" class="form-control" id="formGroupExampleInput3" placeholder="Exemple : tarteàlacrème@gravier.com">
                </div>
                
                <div class="form-group col-md-5 mt-4">
                    <label for="exampleFormControlFile1">Sélectionnez une photo :</label>
                    <input type="file" class="form-control-file" id="exampleFormControlFile1">
                </div>

                <button type="button" class="btn btn-secondary ml-3 mt-4">Valider</button>

            </form>

</body>