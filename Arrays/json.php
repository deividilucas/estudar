<?php 

// JSON ENCODE --> transforma array em json
// JSON DECODE --> transforma o json em array , lembrar do true: json_decode($json, true);

array_push($pessoas, array(
    'nome'=> 'Lucas',
    'idade'=> 34,
    'Atleta'=> "Sim"
));

array_push($pessoas, array(
    'nome'=> 'Maria',
    'idade'=> 30,
    'Atleta'=> 'Não'
));

array_push($pessoas, array(
    'nome'=> 'Pedro',
    'idade'=> 27,
    'Atleta'=> 'Não'
));

echo json_encode($pessoas);

?>