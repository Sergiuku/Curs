Partea I
<?php
for($i=0; $i<=25; $i += 1) {
    $a=2*$i;
    $b=1+2*$i;
    $c=$a+$b;
    echo  $a,' + ',$b,' = ',$c,'<br>';
}

Partea II

<?php
for($i=0; $i<=25; $i += 1) {
   echo 2*$i,'+';
   echo 1+2*$i,' = ';
   echo 1+4*$i,'<br>';
}
