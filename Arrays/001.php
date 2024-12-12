<?php 

$pessoas = array();

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

print_r($pessoas[0]['nome']);

?>