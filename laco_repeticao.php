<?php

for($i=0; $i<10; $i+=2){
    echo "<br>i= " . $i;
    if($i == 11){
        //break;
        $i = 100;
    }
}

?>