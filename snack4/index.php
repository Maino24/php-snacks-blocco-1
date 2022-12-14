<!---
Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta
-->

<?php

// CREO ARRAY VUOTO
$array = [];
// CICLO FOR PER GENERARE 15 NUMERI CASUALI
for($i=0; count($array)<15; $i++){
    $numeroRandom = rand(1, 1000);
    
    //controllo se numero è gia presente in array
    if( !in_array( $numeroRandom, $array )){    
    //INSERISCO OGNI NUMERO GENERATO SUBITO NELL'ARRAY
    //potrei inserire le chiavi scrivendo dentro le []
    $array[] = $numeroRandom;
    };
};
// STAMPO ARRAY

for($k=0; $k< count($array); $k++){
    echo $array[$k];
    echo "<br>";
};




?>

