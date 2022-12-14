<!---
Creare un array contenente qualche alunno di un’ipotetica classe.
Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici.
Stampare Nome, Cognome e la media dei voti di ogni alunno.
-->

<?php

$arrayAlunni = [
    
    [
        'nome' => 'francesco',
        'cognome' => 'rossi',
        'voti' => [2,6,3,8,10],      
    ],
    [
        'nome' => 'enrico',
        'cognome' => 'verdi',
        'voti' => [4,3,9,8,10],   
    ],
];


for($i=0; $i < count($arrayAlunni); $i++){
    $mediaVoti = array_sum( $arrayAlunni[$i]['voti']) / count($arrayAlunni[$i]['voti']);

    echo $arrayAlunni[$i]['nome'] . '-' . $arrayAlunni[$i]['cognome'] . '-' . $mediaVoti;
    
    echo "<br>";
};

?>