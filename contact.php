<?php
$title = "Nous contacter";
require_once "header.php";
require_once "menu_function.php";
require_once "config.php";
$creneaux = creneaux_html(CRENEAUX);
$nav = "contact";
require 'header.php';
?>

<div class="row">
    <div class="col-md-8">
        <h2>Nous contacter</h2>
        <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt itaque facilis omnis, commodi numquam sed nemo animi voluptatum doloribus. Officia laudantium velit ipsa beatae atque voluptatum voluptatibus harum amet quo! </p>
    </div>
    <div class="col-md-4">
        <h2>Horaire d'ouverture</h2>
        <?= $creneaux ?>
    </div>
</div>



<?php require 'footer.php'; ?>