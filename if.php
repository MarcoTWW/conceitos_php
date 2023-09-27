<h2>Desvio Condicional ( IF ELSE )</h2>

<?php
    //Caso tenha somente uma linha de código abaixo do if, não é necessário usar {}

    echo "<h3>Exemplos</h3>";
    echo "<h4>Desvio Condicional Simples</h4>";
    $idade = 18;

    if ($idade >= 18)
        echo "Você tem " . $idade . "anos, então é maior de idade!";

    echo "<p>";
    if ($idade >= 18){
        echo "Você tem " . $idade . "anos, então é maior de idade!";
        echo "<br>Se você for preso, vai dormir na cadeia";
    }

    echo "<h4>Desvio Condicional Composto</h4>";
    $idade = 15;

    if ($idade >= 18)
        echo "Você tem" . $idade . "anos, então é maior de idade!";
    else
        echo "Você tem" . $idade . "anos, então é menor de idade!";

    echo "<p>";
    if ($idade >= 18){
        echo "Você tem " . $idade . "anos, então é maior de idade!";
        echo "<br>Se você for preso, vai dormir na cadeia";
    }else{
        echo "Você tem " . $idade . "anos, então é menor de idade!";
        echo "<br>Se você for preso, não pode dormir na cadeia";
    }

    echo "<h4>Desvio Condicional Encadeado</h4>";
    $idade = 15;

    if ($idade >= 18)
        echo "Você tem" . $idade . "anos, então é maior de idade!";
    else
        echo "Você tem" . $idade . "anos, então é menor de idade!";

    echo "<p>";
    if ($idade >= 18){
        echo "Você tem " . $idade . "anos, então é maior de idade!";
        echo "<br>Se você for preso, vai dormir na cadeia";
    }else{
        echo "Você tem " . $idade . "anos, então é menor de idade!";
        echo "<br>Se você for preso, não pode dormir na cadeia";
    }

?>