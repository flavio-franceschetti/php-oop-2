<?php 
require_once __DIR__ . '/Model/Product.php';
require_once __DIR__ . '/Model/Toy.php';
require_once __DIR__ . '/Model/Accessory.php';
require_once __DIR__ . '/Model/Food.php';
require_once __DIR__ . '/data/db.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-oop-2</title>
</head>
<body>
    <div class="container">
        <h1>Pet Shop</h1>
        <div class="d-flex gap-3">
            <?php foreach($db as $product): ?>
                <div class="card" style="width: 18rem;">
                    <img src="img/<?php echo $product->getImage() ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $product->getName() ?></h5>
                        <p class="card-text"><?php echo $product->getDescription() ?></p>
                        <h6><?php echo $product->getPrice() ?>€</h6>
                        <ul>
                            <li>Type: <?php echo $product->getType() ?></li>
                            <li>For: <?php echo $product->getAnimalType() ?></li>

                            <!-- creo una condizione per la quale se product è un istanza di toy allora stampami gli attributi che sono in toy -->
                            <?php if($product instanceof Toy): ?>
                                <li>Material: <?php echo $product->getMaterial() ?></li>
                                <li>Size: <?php echo $product->getSize() ?></li>
                            <?php endif; ?>

                            <!-- creo una condizione per la quale se product è un istanza di accessory allora stampami gli attributi di accessory -->
                            <?php if($product instanceof Accessory): ?>
                                <li>Category: <?php echo $product->getCategory() ?></li>
                            <?php endif; ?>

                            <!-- creo una condizione per la quale se product è un istanza di food allora stampami gli attributi di food -->
                            <?php if($product instanceof Food): ?>
                                <li>Flavor: <?php echo $product->getFlavor() ?></li>
                                <li>Age group: <?php echo $product->getAgeGroup() ?></li>
                            <?php endif; ?>
                            
                            

                            
                        </ul>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>
</html>