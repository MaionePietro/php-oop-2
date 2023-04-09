<?php
require_once __DIR__ . "/models/Dog.php";
require_once __DIR__ . "/models/Cat.php";


$articoliCani =[
    $cane1 = new Dog(42, "smoll", "crocchette", 20, "img.png", "cane", "boby"),
    $cane2 = new Dog(42, "smoll", "crocchette", 20, "img.png", "cane", "boby"),
    $cane3 = new Dog(42, "smoll", "crocchette", 20, "img.png", "cane", "boby"),
    $cane4 = new Dog(42, "smoll", "crocchette", 20, "img.png", "cane", "boby"),
];
$articoliGatti =[
    $gatto1 = new Cat("pelo piumino", "elettrica", "scatolette", 29, "img.png", "gatto", "Asso"),
    $gatto2 = new Cat("pelo piumino", "elettrica", "scatolette", 29, "img.png", "gatto", "Asso"),
    $gatto3 = new Cat("pelo piumino", "elettrica", "scatolette", 29, "img.png", "gatto", "Asso"),
    $gatto4 = new Cat("pelo piumino", "elettrica", "scatolette", 29, "img.png", "gatto", "Asso"),
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

            <div class="row row-cols-1 row-cols-md-4 g-4">
                <?php foreach ($articoliCani as $articolo) {
                    $articolo->printCardDogHTML();
                } ?>
            </div>
        </section>
        <section> 
            <h2>Articoli gatti</h2>
            <div class="row row-cols-1 row-cols-md-4 g-4">
                <?php foreach ($articoliGatti as $articolo) :

                    $articolo->printCardCatHTML();

                endforeach ?>
            </div>
        </section>
    </main>
</body>

</html>