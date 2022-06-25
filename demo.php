<?php
$prenom = "Marc";
$nom = "Doe";
$note1 = 10;
$note2 = 20;
$moyenne = ($note1 + $note2) /2;

echo "Bonjour $prenom $nom vous avez eu $moyenne de moyenne"
?>

<?php
$notes = [];
$action = null;

while ($action !== "fin") {
    $action = readline('Rentrer une nouvelle note ou \'fin\' pour terminer la saisie :');
    if ($action !== 'fin') {
        $notes[] = (int)$action;
    }
}
foreach ($notes as $note) {
echo "- $note \n";
}
?>

<?php
$notes = [];

while (true) {
    $action = readline('Rentrer une nouvelle note ou \'fin\' pour terminer la saisie :');
    if ($action === "fin") {
        break;
    } else {
        $notes[] = (int)$action;
    }
}
foreach ($notes as $note) {
    echo "- $note \n";
}
?>

<?php
$crenaux = [];

while (true) {
    $ouverture = (int)readline("Entrer l'heure d\'ouverture : ");
    $fermeture = (int)readline("Entrer l'heure de fermeture : ");
    if ($ouverture >= $fermeture) {
        echo "Le créneau ne peut pas être enregistré car l'heure d'ouverture ($ouverture) est supérieur à l'heure de fermeture ($fermeture)";
    } else {
        $crenaux[] = [$ouverture, $fermeture];
        $action = readline("Voulez vous rajouter un nouveau créneau (o/n) :");
        if ($action === "n") {
            break;
        }
    }
}

echo "Le magasin est ouvert de ";
foreach ($crenaux as $k => $crenau) {
    if ($k > 0) {
        echo " et de ";
    }
        echo "{$creneau[0]}h à {$creneau[1]}h"; 
}
?>


/*
$heure = (int)readline("A qu'elle heure voulez vous aller au magasin ?");
$creneauTrouve = false;

foreach($crenaux as $creneau) {
    if ($heure >= $creneau[0] && $heure <= $creneau[1]) {
        $creneauTrouve = true;
        break; 
    }
}

if ($creneauTrouve) {
    echo "Le magasin sera ouvert";
} else {
    echo "Le magasin sera fermé";
} 
*/

