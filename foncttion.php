<?php
$insultes = ["merde", "con"];
$asterisque = [];

foreach ($insultes as $insulte) {
    $firstletter = substr($insulte, 0, 1);
    $filter[] = $firstletter . str_repeat("*", strlen($insulte) -1);
}
$phrase = readline("Taper une phrase : ");
$phrase = str_replace($insultes, $filter, $phrase);

/* foreach ($insultes as $insulte) {
    $filter = str_repeat("*", strlen($insulte));
    $phrase = str_replace($insulte, $filter, $phrase);   
} */
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



