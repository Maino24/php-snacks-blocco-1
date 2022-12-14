<!---
Prendere un paragrafo abbastanza lungo, contenente diverse frasi.
Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo.
-->

<?php
$paragrafo = 'Lorem, ipsum dolor sit amet consectetur adipisicing elit.
Totam esse voluptates nam aspernatur corporis ab nihil deleniti quod?
Perferendis iste blanditiis porro tenetur repellendus id saepe nesciunt culpa consequatur assumenda.
Lorem, ipsum dolor sit amet consectetur adipisicing elit.
Totam esse voluptates nam aspernatur corporis ab nihil deleniti quod?
Perferendis iste blanditiis porro tenetur repellendus id saepe nesciunt culpa consequatur assumenda.';

$arrayParagrafi = explode('.', $paragrafo);

for($i=0; $i < count($arrayParagrafi); $i++){
    echo "<p>";
    echo $arrayParagrafi[$i];
    echo "<p>";
};


?>