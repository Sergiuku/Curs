<?php
$a = 5;
for($b=1; $b<=8*PHP_INT_SIZE; $b++) {
    echo 'a&b=', $a & $b,
        '; a|b=', $a | $b,
        '; a<<b=', $a << $b,
        '; a>>b=', $a >> $b,
        '; a^b=', $a ^ $b,
        '; ~a=', ~$a,
        '; ~b=', ~$b,
        '; (a>>b)&0x1=', ($a >> $b) & 0x1,
    '<br>';
}