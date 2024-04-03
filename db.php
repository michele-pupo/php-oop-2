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
$product1 = new Product (36, 'Pettine', 9.99, 'Pettine fitto per pelo corto', 'https://shop-cdn-m.mediazs.com/bilder/5/400/252336_pla_kooa_kamm_aus_bambus_mit_rotierenden_z_hnen_1_5.jpg', $cani);

// var_dump($product1);

//istazio classe Cibo
$cibo_labrador = new Food (23, 'Natural Trainer Maxi Adult', 43.99, 'Crocchette per cani adulti di taglia grande', 'https://shop-cdn-m.mediazs.com/bilder/3/400/73477_pla_nova_foods_trainer_natural_maxi_beef_rice_und_ginseng_12kg_hs_01_3.jpg', $cani, '12', '10/12/2025', 'Manzo');

// var_dump($cibo_labrador);

//istanzio classe Gioco
$tiragraffi = new Game (78, "Graffiatoio Simon's Cat", 10.49, "Simpatico graffiatoio per gatti ispirato all'iconico Simon's Cat", 'https://shop-cdn-m.mediazs.com/bilder/7/400/110031_pla_karlie_simonscat_kratzpappe_hs_01_7.jpg', $gatti, 'L 47 x P 26 x H 25 cm', 'Legno');

// var_dump($tiragraffi);

//istanzio classe Cuccia
$cuccia_labrador = new Kennel (99, "Gabbia per cani Trixie Friends on Tour Home", 51.99, 'Gabbia per cani Trixie Friends on Tour Home in metallo zincato, pieghevole, con vaschetta in plastica sul fondo', 'https://shop-cdn-m.mediazs.com/bilder/5/400/10777_pla_trixie_friends_on_tour_home_kennel_b_48_x_t_64_x_h_54_cm_hs_01_5.jpg', $cani, 'L 64 x P 48 x H 54 cm', 'metallo zincato');

// var_dump($cuccia_labrador);


$productArray = [
    $product1,
    $cibo_labrador,
    $tiragraffi,
    $cuccia_labrador
];

var_dump($productArray);