<?php
//Exercitiul 1:
//Scrie un cod PHP care să afișeze valorile a patru comparații stricte:
$bool = 'down';
echo 'Comparatie int si string: ',var_dump(32 === 'no'), '<br>';
echo 'Comparatie float si int: ',var_dump(43 === 3.432), '<br>';
echo 'Comparatie string si float: ',var_dump('43.232' === 43.232), '<br>';
echo 'Comparatie bool si string: ', var_dump($bool === 'up'), '<br>';



//Exercitiul 2, Partea I:
/* Scrie un cod PHP care să afișeze valoarea booleană a unei comparații stricte dintre o expresie
 * matematică și un string.
 * Expresia matematică trebuie să conțină cel puțin o operație de gradul I, una
 * de gradul II, și să folosească cel puțin o dată parantezele rotunde pentru grupare.
 */
 
echo 'Comparatie dintre expresie matematica si un string: ', var_dump((2*3)+5 === 'wrong'), '<br>';



//Exercitiul 2, Partea II:

/* Explica in cuvinte ce face urmatorul cod:
 * <?php
 * $foo = 4 == '5';
 *
 *
 *Raspuns: Se face o comparatie dintre un int(4) si un string('5'). Aceasta comparatie va fi falsa.
 *			Comparatia dintre cele 2 va fi valoarea data variabilei $foo.
 */


