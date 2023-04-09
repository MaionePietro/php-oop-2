<?php
require_once __DIR__ . "/models/Dog.php";
require_once __DIR__ . "/models/Cat.php";


$articoliCane =[
    $cane1 = new Dog(42, "smoll", "crocchette", 20, "img.png", "cane", "boby"),
    $cane2 = new Dog(42, "smoll", "crocchette", 20, "img.png", "cane", "boby"),
    $cane3 = new Dog(42, "smoll", "crocchette", 20, "img.png", "cane", "boby"),
    $cane4 = new Dog(42, "smoll", "crocchette", 20, "img.png", "cane", "boby"),
];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-oop-2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</head>

<body class="bg-dark-subtle">
    <main class="container pb-5">
        <h1 class="my-5">Shop</h1>

        <section>
            <h2>Articoli cani</h2>

            <div class="row row-cols-1 row-cols-md-3 g-4">
                <?php foreach ($articoliCane as $articolo) {
                    $articolo->printCardHTML();
                } ?>
            </div>
        </section>
        <!-- <section> 
            <h2>Articoli gatti</h2>
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <?php //foreach ($auto as $veicolo) :

                    //$veicolo->printCardHTML();

                //endforeach ?>
            </div>
        </section>-->
    </main>
</body>

</html>