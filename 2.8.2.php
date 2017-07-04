<?php
$names = array('Mircea','Claudiu', 'Ioana', 'Flaviu');
$me = 'Claudiu';
$after_me = '<nimeni>';
foreach($names as $index => $name) {
    if($name === $me) {
        $after_me = isset($names[$index+1]);
        break;
    }
}
echo 'Dupa mine este ',$after_me;