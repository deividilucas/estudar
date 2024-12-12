<?php 

// Mais usado para array e coleções


$meses = array(
  "Janeiro", "Fevereiro", "Março",
  "Abril", "Maio", "Junho",
  "Julho", "Agosto", "Setembro",
  "Outbro", "Novembro", "Dezembro"
);

foreach ($meses as $mes) {
    echo $mes . "<br>";
}

echo "<hr>"; // uma linha separador
echo "<br>";


// Se eu quiser pxuar o índice eu faço:

$animais = array(
  "cão", "gato", "galinha", "pato", "cavalo"
);

foreach ($animais as $index => $animal) {
  echo $index . " " . $animal. "<br>";
}
?>