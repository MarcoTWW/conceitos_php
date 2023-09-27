<h2>Operadores de Atribuição</h2>

<?php

    // $soma   = $a + $b;
    // $sub    = $a - $b;
    // $mult   = $a * $b;
    // $div    = $a / $b;
    // $modulo = $a % $b;
    // $exp    = $a ** $b;

    echo "<h3>Exemplos</h3>";
    $a = 5;
    $b = 3;
    $c = '5';

    $igual = $a == $c;
    $identico = $a === $c;
    $diferente = $a != $b;
    $naoidentico = $a !== $b;
    $maiorigual = $a >= $b;
    $menorigual = $a <= $b;
    $maior = $a > $b;
    $menor = $a < $b;

    echo nl2br("A é igual à C: " . $igual . "\n");
    echo nl2br("A é identico à C: " . $identico . "\n");
    echo nl2br("A é diferente de B: " . $diferente . "\n");
    echo nl2br("A é não é identico à B: " . $naoidentico . "\n");
    echo nl2br("A é maior ou igual à B: " . $maiorigual . "\n");
    echo nl2br("A é menor ou igual à B: " . $menorigual . "\n");
    echo nl2br("A é maior que B: " . $maior . "\n");
    echo nl2br("A é menor que B: " . $menor);

?>