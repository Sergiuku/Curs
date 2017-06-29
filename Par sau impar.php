<?php
$number = -6;
do {
    echo "$number este " . ( ($number % 2) ? 'impar' : 'par' ).'.<br>';
    $number++;
} while($number <= 6);