<?php

$frutas = ['mamão', 'maçã', 'melão'];

array_unshift($frutas, 'abacaxi');

echo "<pre>";
print_r($frutas);
echo "</pre>";

array_push($frutas, 'romã');

echo "<pre>";
print_r($frutas);
echo "</pre>";

array_splice($frutas, 1, 1, []);

echo "<pre>";
print_r($frutas);
echo "</pre>";

array_pop($frutas);

echo "<pre>";
print_r($frutas);
echo "</pre>";

array_splice($frutas, 1, 1, ['maracujá']);

echo "<pre>";
print_r($frutas);
echo "</pre>";

?>