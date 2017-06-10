<?php
/**
 * variabile
 * r - raza cercului
 * a - lungimea laturii patratului
 * m,n - lungimea si latimea dreptunghiului
 * output;
 * Aria unui cerc de raza r=20 este 1256
 * diametrul sau este 40
 * dreptunghiul cu laturile 8 8 are permietrul 32
 */
$r = 20;
$pi = 3.1415;
$a = $pi;
$m = 8;
$n = 8;
$c_area = $pi * $r * $r;
$r_area = $m * $n;
$r_perim = 2 * ($m + $n);
echo 'Aria unui cerc de raza r = ', $r,  ' este ', $c_area, '<br>';
echo 'Diametrul sau este de ', $r * 2, '<br>';
echo 'Dreptunghiul cu laturile ', $m, ' si ', $n, ' are perimetrul ', $r_perim, '<br>';
/*
 * l = latura
 * Cubul are l = 3
 * af = aria fetei
 * at = aria totala
 * v = volumul
 */
$l = 3;
$af = $l * $l;
$at = 6 * ($l * $l);
$v = $l * $l * $l;
echo 'Latura cubului este l = ', $l, '<br>';
echo 'Aria fetei este ', $af, '<br>';
echo 'Aria totala este ', $at, '<br>';
echo 'Volumul cubului este ', $v, '<br>';
