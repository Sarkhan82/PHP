<?php
$title = "Nous contacter";
require_once "header.php";
require_once "menu_function.php";
date_default_timezone_set("Europe/Paris");
$heure = (int)($_GET["heure"] ?? date("G"));
$jour = (int)($_GET["jour"] ?? date("N") - 1);
$creneaux = CRENEAUX[$jour];
$ouvert = in_creneaux($heure, $creneaux);
$color = $ouvert ? "green" : "red";
require_once "config.php";
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
        <?php if ($ouvert) : ?>
            <div class="alert alert-success">
                Le magasin est ouvert
            </div>
        <?php else : ?>
            <div class="alert alert-danger">
                Le magasin est fermé
            </div>
        <?php endif; ?>
        <form action="" method="get">
            <div class="from-group">
                <?= select("jour", $jour, JOURS) ?>
            </div>
            <div class="form-group">
                <input class="form-control" type="number" name="heure" value="<?= $heure ?>">
            </div>
            <button class="btn btn-primary" type="submit">Voir si le magasin est ouvert</button>
        </form>
        <ul>
            <?php foreach (JOURS as $k => $jour) : ?>
                <li <?php if ($k + 1 === (int)date("N")) : ?> style=<?= $color; ?> <?php endif; ?>>
                    <strong> <?= $jour ?></strong>
                    <?= creneaux_html(CRENEAUX[$k]); ?>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>



<?php require 'footer.php'; ?>