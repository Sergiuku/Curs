<?php
$n = 6;
if ($n > 0) $n = -$n;
do {
    echo "$n este " . ( ($n % 2) ? 'impar' : 'par' ).'.<br>';
    $n++;
} while($n <= 6);