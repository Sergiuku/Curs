<?php

if (isset($_GET['a']) && isset($_GET['b'])) {
    $op = NULL;
    if (isset($_GET['op'])) {
        $op = $_GET['op'];
    }
    switch ($op) {
        case NULL:
        case 'add':
            if ($op === 'add') {
                echo (int)$_GET['a'], ' + ', (int)$_GET['b'], ' = ', (int)$_GET['a'] + (int)$_GET['b'], '<br>';
                if (isset($op)) {
                    break;
                }
            }
        case 'sub':
            if ($op === 'sub') {
                echo (int)$_GET['a'], ' - ', (int)$_GET['b'], ' = ', (int)$_GET['a'] - (int)$_GET['b'], '<br>';
                if (isset($op)) {
                    break;
                }
            }
        case 'mul':
            if ($op === 'mul') {
                echo (int)$_GET['a'], ' * ', (int)$_GET['b'], ' = ', (int)$_GET['a'] * (int)$_GET['b'], '<br>';
                if (isset($op)) {
                    break;
                }
            }
        case 'div':
            if ($op === 'div') {
                echo (int)$_GET['a'], ' / ', (int)$_GET['b'], ' = ', (int)$_GET['a'] / (int)$_GET['b'], '<br>';
                if (isset($op)) {
                    break;
                }
            }
        case 'mod':
            if ($op === 'mod') {
                echo (int)$_GET['a'], ' % ', (int)$_GET['b'], ' = ', (int)$_GET['a'] % (int)$_GET['b'], '<br>';
                if (isset($op)) {
                    break;
                }
            }
        default:
            echo "Trebuie specificat unul dintre urmatorii operatori: add,sub,mult,div,mod", "<br>";
            break;
    }
} else {
    echo 'Introdu valorile a si b.';
}