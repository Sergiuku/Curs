<?php
/**
 * afiseaza ca true sau false codul binar al unei variabile $a
 * void functie_binara(int $a)
 */
function functie_binara($a)
{
    for ($i = 8 * PHP_INT_SIZE - 1; $i >= 0; $i--) {
        echo ($a >> $i) & 1 ? '1' : '0', '<br>';
    }
}
functie_binara(20);