<?php
if (isset($_GET['a']) && isset($_GET['b'])) {
    $op = NULL;
    if (isset($_GET['op'])) {
        $op = $_GET['op'];
    }
    switch ($op) {
        case NULL:
        case '':
            if (trim($op) === '') {
                $op = NULL;
            } else if (isset($op)) {
                break;
            }
        case 'add':
            echo (int)$_GET['a'], ' + ', (int)$_GET['b'], ' = ', (int)$_GET['a'] + (int)$_GET['b'], '<br>';
            if (isset($op)) {
                break;
            }
        case 'sub':
            echo (int)$_GET['a'], ' - ', (int)$_GET['b'], ' = ', (int)$_GET['a'] - (int)$_GET['b'], '<br>';
            if (isset($op)) {
                break;
            }
        case 'mul':
            echo (int)$_GET['a'], ' * ', (int)$_GET['b'], ' = ', (int)$_GET['a'] * (int)$_GET['b'], '<br>';
            if (isset($op)) {
                break;
            }
        case 'div':
            echo (int)$_GET['a'], ' / ', (int)$_GET['b'], ' = ', (int)$_GET['a'] / (int)$_GET['b'], '<br>';
            if (isset($op)) {
                break;
            }
        case 'mod':
            echo (int)$_GET['a'], ' % ', (int)$_GET['b'], ' = ', (int)$_GET['a'] % (int)$_GET['b'], '<br>';
            if (isset($op)) {
                break;
            }
        default:
            echo "Trebuie specificat unul dintre urmatorii operatori: add,sub,mult,div,mod";
    }
} else {
    echo 'Introdu valorile a si b.';
}