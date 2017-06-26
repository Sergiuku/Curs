<?php

$bool = TRUE;
echo 'Comparatie int si string: ',var_dump(32 === 'no'), '<br>';
echo 'Comparatie float si int: ',var_dump(43 === 3.432), '<br>';
echo 'Comparatie string si float: ',var_dump('43.232' === 43.232), '<br>';
echo 'Comparatie bool si string: ', var_dump($bool === 'up'), '<br>';