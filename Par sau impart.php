<?php
$num = -6;
do {
    if('par' === ($num & 1 ? 'impar' : 'par')) {
        echo $num.' este par <br>';
    } else {
        echo $num.' este impar <br>';
    }
    $num++;
} while($num <= 6);