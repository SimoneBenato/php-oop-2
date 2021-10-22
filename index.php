<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Secondo step con i nostri oggetti</title>
</head>
<body>
    <div class="wrapper">
        <?php
        require 'classes/userExtension.php';
        
        foreach($users as $user) {?>
            <div class="container">
                <div class="text">
                    <h1><?php echo $user->getUserName(); ?></h1>
                    <h3><?php echo $user->getPassword(); ?></h3>
                    <h5><?php echo $user->getPremium(); ?></h5>
                </div>   
            </div>
            <?php }
        ?>

        <!-- <?php
        foreach($products as $product) {?>
            <div class="container">
                <div class="text">
                    <h1><?php echo $product->getTitolo(); ?></h1>
                    <h3><?php echo $product->getSottotitolo(); ?></h3>
                    <h5><?php echo $product->getRegista(); ?></h5>
                    <p><?php echo $product->getCast(); ?></p>
                    <span><?php echo $product->getDurata(); ?> min</span>
                    <span>Lenguage: <?php echo $product->getLingua(); ?></span>
                </div>   
            </div>
            <?php }
        ?> -->
    </div>
</body>
</html>