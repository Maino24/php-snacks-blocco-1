<!---
Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: 
DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data.
Stampare ogni data con i relativi post.
Qui l’array di esempio: https://www.codepile.net/pile/R2K5d68z
-->

<?php

$posts = [

    '13-12-2022' => [
        [
            'title' => 'Post 1',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 1'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 2'
        ],
    ],
    
    '10-02-2019' => [
        [
            'title' => 'Post 3',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 3'
        ]
    ],
];

//MI PERMETTE DI ATTRIBUIRE UN ARRAY ALLE CHIAVI
$arrayDate = array_keys( $posts );

//var_dump( $posts[ $arrayDate[0]]);

for( $i=0; $i<count($posts); $i++ ){
    echo $arrayDate[$i];
    echo "<br>";


    for($k=0; $k<count($posts[ $arrayDate[$i]]); $k++){
        echo $posts[ $arrayDate[$i]][$k]['title'];
        echo "<br>";
        echo $posts[ $arrayDate[$i]][$k]['author'];
        echo "<br>";
        echo $posts[ $arrayDate[$i]][$k]['text'];
        echo "<br>";
        echo "<br>";
    };

};

?>
