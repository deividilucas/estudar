<?php 

// Muito usado em BD

$condicao = true;

while ($condicao) {
    $numero = rand(1, 10); // gerando números randômicos

    if ($numero === 3) {
        echo "Parábens, é TRÊEEEES!!!";
        $condicao = false;
    }
    echo $numero . " ";
}


?>