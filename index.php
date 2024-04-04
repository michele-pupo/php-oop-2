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

    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer">
</head>
<body style="background-color: #337357">
    <div class="container">
        <h1 class="text-center display-1 fw-bold py-4">E-commerce animali</h1>
    </div>
    <div class="container">
        <div class="row ">

            <?php 
            foreach($productArray as $product){
                ?>
                <div class="col-3 justify-content-center">
                    <div class="d-flex flex-column justify-content-between">
                        <div class="card p-2" style="width: 100%; height: 750px; background-color: #96E9C6">
                            <img src="<?= $product->img ?>" alt=<?= $product->name ?>>
                            <div class="product-body">
                            <span class="product-category fs-3 d-flex justify-content-center py-3"><i class="fa-solid <?= $product->category->icon ?>"></i></span>
                                <h2 class="product-name d-flex justify-content-center text-center"><?= $product->name ?></h2>
                                <span class="product-price text-danger fw-bold d-flex justify-content-center"><strong class="text-black">Prezzo: </strong> <?= $product->price ?> €</span>
                                <p class="product-description text-center pt-3"><?= $product->description ?></p>
                                <?php
                                if($product->getClassName()=="Food"){
                                    ?>
                                    <div class="text-center">
                                        <h3 class="product-weight"><?= $product->weight . 'KG' ?></h3>
                                        <h4 class="product-ingredients fs-5"><?= $product->ingredients ?></h4>
                                        <h5 class="product-expiration fs-5"><span class="fw-bold">scadenza:</span><?= $product->expiration ?></h5>
                                    </div>
                                    <?php
                                } else if($product->getClassName()=="Kennel" || $product->getClassName()== "Game"){
                                    ?>
                                    <div class="text-center">
                                        <h4 class="product-size fs-5"><?= $product->size ?></h4>
                                        <h5 class="product-material fs-5"><?= $product->material ?></h5>
                                    </div>
                                    <?php
                                }
                                ?>
                            </div>
                            <div class="d-flex justify-content-center pt-4">
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