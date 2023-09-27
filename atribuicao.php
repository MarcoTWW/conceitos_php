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


    echo nl2br("Atribuição com soma: ". $a += 3 . "\n");
    echo nl2br("Atribuição com subtração: ". $a -= 2 . "\n");
    echo nl2br("Atribuição com multiplicação: ". $a *= 5 . "\n");
    echo nl2br("Atribuição com divisão: ". $a /= 10 . "\n");
    echo nl2br("Atribuição com módulo: ". $a %= 2 . "\n");
    echo nl2br("Atribuição com exponenciação: ". $a **= 2 . "\n");

?>