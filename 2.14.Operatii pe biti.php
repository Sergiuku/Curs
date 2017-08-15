<?php
$a = 5;
for ($b = 1; $b <= 8 * PHP_INT_SIZE; $b++) {
    echo 'a&b=', $a & $b,'; ';
    echo 'a|b=', $a | $b,'; ';
    echo 'a<<b=', $a << $b,'; ';
    echo 'a>>b=', $a >> $b,'; ';
    echo 'a^b=', $a ^ $b,'; ';
    echo '~a=', ~$a,'; ';
    echo '~b=', ~$b,'; ';
    echo '(a>>b)&0x1=', ($a >> $b) & 0x1;
    echo '<br>';
}