<?php
//funções de manipulação de array

/*
array_push - Adiciona um ou mais elementos no final de um array
array_pop - Extrai um elemento do final do array
array_shift - Retira o primeiro elemento de um array
array_unshift - Adiciona um ou mais elementos no início de um array
array_splice - Remove uma parte array e a substitui por outra coisa
count - Conta o número de elementos de uma variável, ou propriedades de um objeto
*/

$array = [];
$vazio = "";

array_push($array,"Senac", "Tau");
array_push($array, ["igor", "gabriel", "Samuel", "Evelyn", "Matheus"]);
array_push($array[2], "Cauã");
echo "<pre>";

print_r($array);
echo "</pre>"; // formata o modo de apresentação da saída

echo "<br> A  array possui " .count($array). " posições.";

array_pop($array);

echo "<pre>";
print_r($array);
echo "</pre>";

array_shift($array);

echo "<pre>";
print_r($array);
echo "</pre>";

array_unshift($array, "Cauã", "Marcos");

echo "<pre>";
print_r($array);
echo "</pre>";

array_splice($array, 3, 1, "TESTE 2");

echo "<pre>";
print_r($array);
echo "</pre>";

?>