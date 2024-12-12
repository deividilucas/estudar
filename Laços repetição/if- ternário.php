<?php

$qualSuaIdade = 17;

$idadeCrianca = 12;
$idadeAdolescente = 16;
$idadeIdoso = 65;

if ($qualSuaIdade < $idadeCrianca) {
    echo "Criança";

} else if ($qualSuaIdade < $idadeAdolescente) {
    echo "Adolescente";

} else if ($qualSuaIdade < $idadeIdoso) {
    echo "Adulto";

} else {
    echo "Idoso";
}
echo "<br>";

//////////////////////////////////////////////////
// operador ternário//

echo ($qualSuaIdade < $idadeAdolescente)? "Um adolescente": "maior de idade";
?>