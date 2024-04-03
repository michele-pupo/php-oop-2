<?php

require 'db.php';

?>

<!DOCTYPE html>
<html lang="it-IT">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce animali</title>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1 class="text-center display-1 fw-bold">E-commerce animali</h1>
    </div>
    <div class="container">
    <div class="row ">

        <?php 
        foreach($productArray as $product){
            ?>
            <div class="col-3  justify-content-center">
                <div class="card" style="width: 100%;">
                    <img src="<?= $product->img ?>" class="product-img-top" alt=<?= $product->name ?>>
                    <div class="product-body">
                        <h2 class="product-name"><?= $product->name ?></h2>
                        <span class="product-price"><?= $product->price ?> €</span>
                        <p class="product-description"><?= $product->description ?></p>
                        <?php
                        if($product->getClassName()=="Food"){
                            ?>
                            <h3 class="product-weight"><?= $product->weight . 'KG' ?></h3>
                            <h4 class="product-ingredients"><?= $product->ingredients ?></h4>
                            <h5 class="product-expiration"><?= $product->expiration ?></h5>
                            <?php
                        } else if($product->getClassName()=="Kennel" || $product->getClassName()== "Game"){
                            ?>
                            <h4 class="product-size"><?= $product->size ?></h4>
                            <h5 class="product-material"><?= $product->material ?></h5>
                            <?php
                        }
                        ?>
                        <div class="product-category">
                                <?php 
                                foreach($product->categories as $category){
                                    echo "<li>$category</li>";
                                }
                                ?>
                            <a href="#" class="btn btn-primary">Acquista</a>
                        </div>
                    </div>
                </div>
            </div>
            

            <?php
        }
        ?>
    </div>
    </div>
                
    <!-- script bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>