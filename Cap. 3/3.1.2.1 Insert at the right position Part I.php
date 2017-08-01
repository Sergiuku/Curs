<?php
//With the function, $c goes in the right place.
function insert_at_right_pos($a, $b, $c){
    $d = array();
    if ($c <= $a){
        $d = array ($c, $a, $b);
    }else if ($b <= $c){
        $d = array ($a, $b, $c);
    }else{
        $d = array ($a, $c, $b);
    }
    return $d;
}
$a = (int)$_GET['a'];
$b = (int)$_GET['b'];
$c = (int)$_GET['c'];
if($a <= $b) {
    list($a,$b,$c) = insert_at_right_pos($a,$b,$c);
} else {
    list($a,$b) = array($b,$a);
    list($a,$b,$c) = insert_at_right_pos($a,$b,$c);
}
echo "$a <= $b <= $c";