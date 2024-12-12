<?php

/* require_once permite que o arquivo  seja chamado só uma vez 


function sayHello() {
    echo "Olá!";
}

// main.php
require_once 'arquivo1.php';
require_once 'arquivo1.php'; // Ignorado, pois já foi incluído

sayHello();

*/

$_SESSION["nome"] = "Lucas"; 

?>