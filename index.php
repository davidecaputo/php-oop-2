<?php
include './Models/Product.php';

$products = [new Product('Monge Gemon Medium Adult con Tonno e Riso','https://www.bauzaar.it/media/catalog/product/9/0/9013114_1.jpg?width=700&height=700&store=default&image-type=image','Cane','26,29'),new Product('Cuccia in legno Domus Ferplast','https://www.bauzaar.it/media/catalog/product/g/r/grafiche_prodotti_magento_600x600_-_2022-04-04t140434.441_6.png?width=700&height=700&store=default&image-type=image','Cane','129,99'),new Product('Tiragraffi Leaves con Gioco Croci','https://www.bauzaar.it/media/catalog/product/g/r/grafiche_prodotti_magento_600x600_-_2022-04-28t145246.839_1.png?width=700&height=700&store=default&image-type=image','Gatto','13,49'),new Product('Cuccia Divanetto Solid Blu Fabotex','https://www.bauzaar.it/media/catalog/product/9/0/9007477_1.jpg?width=700&height=700&store=default&image-type=image','Gatto','28,49'),new Product('Fuxtreme Palla con Ossi a Ultrasuoni Ferribiella','https://www.bauzaar.it/media/catalog/product/9/0/9023504_1.jpg?width=700&height=700&store=default&image-type=image','Cane','4,49'),new Product('Gioco a forma di giostra Tornado Ferplast','https://www.bauzaar.it/media/catalog/product/g/r/grafiche_prodotti_magento_600x600_-_2022-04-02t122033.393.png?width=700&height=700&store=default&image-type=image','Gatto','8,29')];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body class="bg-info">
    <h1 class="text-center">Negozio per animali</h1>
    <div class="container py-5">
        <div class="row">
            <?php foreach ($products as $product) { ?>
            <div class="col-4 mb-4">
                <div class="card p-2 h-100">
                    <div class="card-image-top">
                        <img src="<?= $product->image ?>" alt="" class="w-75">
                    </div>
                    <div class="card-body">
                        <h2><?= $product->title ?></h2>
                        <?= $product->category == 'Cane'? '<i class="fa-solid fa-dog"></i>' : '<i class="fa-solid fa-cat"></i>' ?>
                        <p><?= $product->price . '€' ?></p>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</body>
</html>