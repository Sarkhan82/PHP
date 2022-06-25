<?php
$insultes = ["merde", "con"];

$phrase = readline("Taper une phrase : ");

foreach ($insultes as $insulte) {
    $filter = str_repeat("*", strlen($insulte));
    $phrase = str_replace($insulte, $filter, $phrase);   
}
echo $phrase;
?>

<?php

while(true) {
    $mot = readline("Entrer un mot : ");
    if ($mot === "") {
        exit("Fin du programme");
    }
    $reverse = strtolower(strrev($mot));
    if (strtolower($mot) === $reverse) {
        echo "Votre mot est un palyndrome.";
    } else {
        echo "Votre mot n'est pas un palydrome. \n";
    }
}
?>

<?php
$notes = [16, 20, 13];
$moyenne = array_sum($notes) / count($notes);
echo "Vous avez " . round($moyenne, 2) . " de moyenne.";
?>


