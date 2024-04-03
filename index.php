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
    <div class="row row-cols-4">

        <?php 
        foreach($productArray as $product){
            ?>
            <div class="col d-flex justify-content-center">
                <div class="card" style="width: 18rem;">
                    <img src="<?= $product->img ?>" class="product-img-top" alt="...">
                    <div class="product-body">
                        <h5 class="product-name"><?= $product->name ?></h5>
                        <span class="product-price"><?= $product->price ?> €</span>
                        <h6></h6>
                        <p class="product-description"><?= $product->description ?></p>
                        <ul class="product-category">
                            <?php 
                            foreach($product->categories as $category){
                                echo "<li>$category</li>";
                            }
                            ?>
                        </ul>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            

            <?php
        }
        ?>
    </div>
    
                
    <!-- script bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>