<!---
Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta
-->

<?php

// CREO ARRAY VUOTO
$array = [];
// CICLO FOR PER GENERARE 15 NUMERI CASUALI
for($i=0; $i<15; $i++){
    $numeroRandom = rand(1, 30);
    //INSERISCO OGNI NUMERO GENERATO SUBITO NELL'ARRAY
    array_push($array, $numeroRandom);
};
// STAMPO ARRAY
print_r($array);




?>

