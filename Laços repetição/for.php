<?php 

 //contador de zero até 100 de  em 15

 for ($x = 0; $x < 100; $x+=15) {

    echo $x . "<br>";
 }

echo "<br>";
 // contaador de 1 em 1;
 
 for ($y = 0; $y < 50; $y++) {

    echo $y . "<br>";
 }

// fazendo um option cm html

echo "<select>";

for ($i=date("Y"); $i >= date ("Y")-100; $i--) {
    echo '<option value= "'.$i.'">'.$i.'</option>';
}
echo '</select>';

?>