<?php
include "inc/functions.php";
$categories = getAllcategories();
if (isset($_GET['id'])){
    $produit = getProduitById($_GET['id']);
}

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-SHOP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
  <?php
include "inc/header.php";

?>
    
<div class="row col-12 mt-4">
    <div class="card col-8 offset-2">
  <img src="images/<?php echo $produit['image'] ?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?php echo $produit['nom'] ?></h5>
    <p class="card-text"><?php echo $produit['description'] ?></p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item"><?php echo $produit['prix'] ?> DT</li>
    <li class="list-group-item"><?php echo $produit['categorie'] ?></li>
    
  </ul>

</div>
      
        
    </div>
    <?php
    include "inc/footer.php";
    ?>
</body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    
</html>