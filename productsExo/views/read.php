<?php

require 'elements/head.php';
require 'elements/footer.php';
require '../config/config.php';
require '../models/connect.php';
$db = connection();
head();

//var_dump($_GET);
$id = $_GET["id"];
//echo $id;
$sqlRequestReadId = "SELECT products.id as prodid,products.name as nameprod, products.description, products.price, categories.name as categororiesName FROM products RIGHT JOIN categories on products.category_id = categories.id WHERE products.id = :ids";
$reqProductsCategories = $db->prepare($sqlRequestReadId);
$reqProductsCategories->bindParam(':ids',$id);
$reqProductsCategories->execute();

$listProductsCategories = array();
while ($data = $reqProductsCategories->fetchObject()) {
	array_push($listProductsCategories, $data);
}
?>
<table class="table table-hover">
<thead class="thead-dark">
<tr>
    <th scope="col">#</th>
    <th scope="col">Description</th>
    <th scope="col">Price</th>
    <th scope="col">Category</th>
</tr>
</thead>
<tbody>
<?php
foreach($listProductsCategories as $article) {
?>

<tr>
    <th scope="row"><?php echo $article->prodid ?></th>
    <td><?php echo $article->description ?></td>
    <td><?php echo $article->price ?></td>
    <td><?php echo $article->categororiesName ?></td>
    
</tr>
<?php
}
footer();
//header('Location: ../products.php'); 
?>