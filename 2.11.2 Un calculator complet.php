<?php
if(!isset($_GET['a']) && !isset($_GET['op']) && !isset($_GET['b'])) {
   echo 'Introduceti a si b';
} else {
    switch($_GET['op']) {
        case 'add':
            echo (int)$_GET['a'], ' + ', (int)$_GET['b'], ' = ', $_GET['a'] + $_GET['b'];
            break;
        case 'sub':
            echo (int)$_GET['a'], ' - ', (int)$_GET['b'], ' = ', $_GET['a'] - $_GET['b'];
            break;
        case 'mul':
            echo (int)$_GET['a'], ' * ', (int)$_GET['b'], ' = ', $_GET['a'] * $_GET['b'];
            break;
        case 'div':
            echo (int)$_GET['a'], ' / ', (int)$_GET['b'], ' = ', $_GET['a'] / $_GET['b'];
            break;
        case 'mod':
            echo (int)$_GET['a'], ' % ', (int)$_GET['b'], ' = ', $_GET['a'] % $_GET['b'];
            break;
        default:
            echo (int)$_GET['a'], ' + ', (int)$_GET['b'], ' = ', $_GET['a'] + $_GET['b'],'<br>';
            echo (int)$_GET['a'], ' - ', (int)$_GET['b'], ' = ', $_GET['a'] - $_GET['b'],'<br>';
            echo (int)$_GET['a'], ' * ', (int)$_GET['b'], ' = ', $_GET['a'] * $_GET['b'],'<br>';
            echo (int)$_GET['a'], ' / ', (int)$_GET['b'], ' = ', $_GET['a'] / $_GET['b'],'<br>';
            echo (int)$_GET['a'], ' % ', (int)$_GET['b'], ' = ', $_GET['a'] % $_GET['b'],'<br>';

    }
}