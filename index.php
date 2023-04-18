<?php
require_once __DIR__ . '/Models/Product.php';
require_once __DIR__ . '/Models/Food.php';
require_once __DIR__ . '/Models/Accessory.php';
require_once __DIR__ . '/Models/Toy.php';

$royal_canin = new Food('Royal Canin Mini Adult', 43.99, 'Cane', 545, ['prosciutto', 'riso']); //Prodotto 1
$almo_nature = new Food('Almo Nature Holistic Maintenance Medium Large Tonno e Riso', 44.99, 'Cane', 600, ['manzo', 'cereali']);//Prodotto 2
$almo_nature_cat = new Food('Almo Nature Cat Daily Lattina', 34.99, 'Gatto', 400, ['tonno', 'pollo', 'prosciutto']);//Prodotto 3
$mangime_pesci = new Food('Mangime per Pesci Guppy in Fiocchi', 2.95, 'Pesce', 30, ['Pesci', 'sottoprodotti dei pesci', 'Cereali', 'Lieviti', 'Alghe']);//Prodotto 4
$voliera = new Accessory('Voliera Wilma in Legno', 18.499, 'Uccello', 'Legno', 'M: L83 x P 67 x H 153 cm');//Prodotto 5
$cartucce = new Accessory('Cartucce Filtranti per Filtro EasyCrystal', 2.29, 'Pesce', 'Materiale espanso', 'ND');//Prodotto 6
$kong = new Toy('Kong Classic', 13.49, 'Cane', 'Galleggia e rimbalza', '8,5 cm x 10 cm');//Prodotto 7
$topini = new Toy('Topini di peluche Trixie', 4.99, 'Gatto', 'Morbido con la codina in corda', '8,5 cm x 10 cm');//Prodotto 8
$products = [$royal_canin, $almo_nature, $almo_nature_cat, $mangime_pesci, $voliera, $cartucce, $kong, $topini];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Boolshop</title>
</head>
<body>
    <h1 class="text-center m-3">BoolShop</h1>
    <div class="row justify-content-center">
        <?php foreach ($products as $product) : ?>
            <div class="col-3 m-3 p-3 cards">
                <div class="text-center">
                    <img class="img-fluid" src="img/image.png" alt="product.img">
                </div>
                <div>
                    <?php foreach ($product as $key => $value) : ?>
                        <?php if ($key == 'name') : ?>
                            <h3 class="text-center"><?php echo $value ?></h3>
                        <?php elseif ($key == 'category') : ?>
                            <div><?php echo 'Categoria: ', $value ?></div>
                        <?php elseif ($key == 'price') : ?>
                            <div><?php echo 'Prezzo: ', $value, ' €' ?></div>
                        <?php elseif ($key == 'material') : ?>
                            <div><?php echo 'Materiale: ', $value ?></div>
                        <?php elseif ($key == 'features') : ?>
                            <div><?php echo 'Caratteristiche: ', $value ?></div>
                        <?php elseif ($key == 'dimension') : ?>
                            <div><?php echo $value ?></div>
                        <?php elseif ($key == 'weight') : ?>
                            <div><?php echo 'Peso netto: ', $value, ' g' ?></div>
                        <?php elseif ($key == 'ingredients') : ?>
                            <div>
                                <?php echo 'Ingredienti: ' ?>
                                <?php foreach ($value as $ingredient) : ?>
                                    <?php echo $ingredient, ', ' ?>
                                <?php endforeach; ?>
                            </div>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</body>
</html>

