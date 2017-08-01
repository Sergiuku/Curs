<?php
// Function puts the $c in the right position and sets the letters in descending order
function sort_triplet_desc($c, $b, $a){
    $d = array();
    if ($c >= $a){
        $d = array ($c, $a, $b);
    }else if ($b >= $c){
        $d = array ($a, $b, $c);
    }else{
        $d = array ($a, $c, $b);
    }
    return $d;
}
$a = (int)$_GET['a'];
$b = (int)$_GET['b'];
$c = (int)$_GET['c'];
if($a >= $b) {
    list($c,$b,$a) = sort_triplet_desc($c,$b,$a);
} else {
    list($b,$a) = array($a,$b);
    list($c,$b,$a) = sort_triplet_desc($c,$b,$a);
}

list($a,$b,$c) = sort_triplet_desc($a,$b,$c);
echo "$a >= $b >= $c";