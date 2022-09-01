<?php
/* $aDeviner = 150;
$erreur = null;
$succes = null;
$value = null;
if (isset($_POST['chiffre'])) {
    $value = (int)$_GET['chiffre'];
    if ($value > $aDeviner) {
        $erreur = "Votre chiffre est trop grand";
    } elseif ($value < $aDeviner) {
        $erreur = "Votre chiffre est trop petit";
    } else {
        $succes = "Bravo ! Vous avez deviné le chiffre <strong> $aDeviner </strong>";
    }

} */
$parfums = [
    "Fraise" => 4,
    "Chocolat" => 5,
    "Vanille" => 3
];
$cornets = [
    "Pot" => 2,
    "Cornet" => 3,
];
$supplements = [
    "Pépites de chocolat" => 1,
    "Chantilly" => 0.5
];
$title = "Composer votre glace";
$ingredients = [];
$total = 0;
if (isset($_GET["parfum"])) {
    foreach($_GET["parfum"] as $parfum) {
       if(isset($parfums[$parfum])) {
        $ingredients[] = $parfum;
        $total += $parfums[$parfum];
       } 
    }
}
if (isset($_GET["supplement"])) {
    foreach($_GET["supplement"] as $supplement) {
       if(isset($supplements[$supplement])) {
        $ingredients[] = $supplement;
        $total += $supplements[$supplement];
       } 
    }
}
if (isset($_GET["cornet"])) {
    $cornet = $_GET["cornet"];
       if(isset($cornets[$cornet])) {
        $ingredients[] = $supplement;
        $total += $cornets[$cornet];
       } 
    }
require 'header.php';
require 'menu_function.php';
?>

<?php /* if ($erreur): ?>
    <div class="alert alert-danger">
        <?= $erreur ?>
    </div>
<?php elseif ($succes): ?>
    <div class="alert alert-sucess">
        <?= $succes ?>
    </div>
    <input type="number" class="form-control" name="chiffre" placeholder="Entre 0 et 1000" value="<?= $value ?>">
    <?php endif ?> */?>


<h1> Composer votre glace </h1>
<div class="row">
    <div class="col-md-4">
       <div class="card">
        <div class="card-body">
            <h5 class="card-title">Votre glace :</h5>
            <ul>
                <?php foreach($ingredients as $ingredient): ?>
                    <li><?= $ingredient ?></li>
                    <?php endforeach; ?>
            </ul>
            <p>
                <strong>Prix : <?= $total ?> €</strong>
            </p>
        </div>
       </div>
    </div>
    <div class="col-md-8">
    <form action="/jeu.php" method="GET">
    <h2>Choissisez vos parfums</h2>
   <?php foreach($parfums as $parfums => $prix): ?>
    <div class="checkbox">
        <Label>
            <?= checkbox("parfum", $parfum, $_GET) ?>
            <?= $parfum ?> - <?= $prix ?> €
        </Label>
    </div>
        <?php endforeach; ?>
        <h2>Pot ou cornet ?</h2>
        <?php foreach($cornets as $cornet => $prix): ?>
    <div class="checkbox">
        <Label>
            <?= radio("cornet", $cornet, $_GET) ?>
            <?= $cornet ?> - <?= $prix ?> €
        </Label>
    </div>
        <?php endforeach; ?>
        <h2>Choissisez vos suppléments</h2>
        <?php foreach($supplements as $supplement => $prix): ?>
    <div class="checkbox">
        <Label>
            <?= checkbox("supplement", $supplement, $_GET) ?>
            <?= $supplement ?> - <?= $prix ?> €
        </Label>
    </div>
        <?php endforeach; ?>
    <button type="submit" class="btn btn-primary">Composer ma glace</button>
</form>
    </div>
</div>

<h2>$_GET</h2>
<pre>
    <?php var_dump($_GET) ?>
</pre>

<h2>$_POST</h2>
<pre>
    <?php var_dump($_POST) ?>
</pre>

<?php require 'footer.php' ?>