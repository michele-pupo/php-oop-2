<?php

require './Models/Product.php';
require './Models/Category.php';
require './Models/Food.php';
require './Models/Kennel.php';
require './Models/Game.php';

//istanzio classe Category
$cani = new Category ('cani', '<i class="fa-solid fa-dog ms-2"></i>');
$gatti = new Category ('gatti', '<i class="fa-solid fa-cat ms-2"></i>');

//istanzio classe Product
$product1 = new Product (36, 'Pettine', 9.99, 'Pettine fitto per pelo corto', 'https://encrypted-tbn1.gstatic.com/shopping?q=tbn:ANd9GcQ,$cani', $cani);