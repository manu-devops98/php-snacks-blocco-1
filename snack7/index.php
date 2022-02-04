<!-- SNACK
Creiamo un array consentente dei prodotti con
Nome
Prezzo
Immagine
Tipologia
Stampiamo tutti i nostri prodotti in pagina
Poi con una select filtriamo i nostri prodotti per prezzo o per tipologia -->
<?php
// include_once __DIR__ . '/db.php';

 $products = [
     [
         'name' => 'Iphone',
         'price' => 800,
         'poster' => 'https://picsum.photos/200/300',
         'type' => 'smartphone',
     ],
     [
         'name' => 'Sony',
         'price' => 200,
         'poster' => 'https://picsum.photos/200/300',
         'type' => 'headphone',
     ],
     [
         'name' => 'TV Samsung',
         'price' => 1200,
         'poster' => 'https://picsum.photos/200/300',
         'type' => 'tv',
     ],
     [
         'name' => 'Soundbar Samsung',
         'price' => 200,
         'poster' => 'https://picsum.photos/200/300',
         'type' => 'soundbar',
     ],
 ];

$filteredProducts = $products;

$type = [];
$price = [];

foreach ($products as $product) {
    if (!in_array($product['type'], $type)) {
        $type[] = $product['type'];
    }
    if (!in_array($product['price'], $price)) {
        $price[] = $product['price'];
    }
}

if (isset($_GET['price']) !== false && isset($_GET['type']) !== false) {
    $price = $_GET['price'];
    $type = $_GET['type'];

    if ($price == 'all' && $type == 'all') {
        $filteredProducts = $products;
    } else {
    $filteredProducts = [];
    foreach ($products as $product) {
            if ($price == $product['price']) {
                $filteredProducts[] = $product;
            }
            if ($type == $product['type']) {
                $filteredProducts[] = $product;
            }
        }
    } 
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>

  <form action="index.php">
            <select name="type" id="type">
                <option value="all">all</option>
                <?php foreach ($type as $singleType) { ?>
                <option value="<?= $singleType ?>"><?= $singleType ?></option>
                <?php } ?>
            </select>
            <select name="price" id="price">
                <option value="all">all</option>
                <?php foreach ($price as $singlePrice) { ?>
                <option value="<?= $singlePrice ?>"><?= $singlePrice ?></option>
                <?php } ?>
            </select>
            <button>Cerca</button>
        </form>
        <div class="container-card">
            <?php foreach ($filteredProducts as $product) { ?>
                <img src="<?= $product['poster'] ?>" alt="">
                <h1><?= $product['name'] ?></h1>
                <h2><?= $product['price'] ?></h2>
            <?php  } ?>
        </div>
    </main>
</body>
</html>