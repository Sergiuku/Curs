<?php
if (isset($_GET['a']) && isset($_GET['b'])) {
    $op = 'none';
    if (isset($_GET['op'])) {
        $op = $_GET['op'];
    }
    switch ($op) {
        case 'none':
        case 'add':
            echo (int)$_GET['a'], ' + ', (int)$_GET['b'], ' = ', (int)$_GET['a'] + (int)$_GET['b'], '<br>';
            if ($op != 'none') {
                break;
            }
        case 'sub':
            echo (int)$_GET['a'], ' - ', (int)$_GET['b'], ' = ', (int)$_GET['a'] - (int)$_GET['b'], '<br>';
            if ($op != 'none') {
                break;
            }
        case 'mul':
            echo (int)$_GET['a'], ' * ', (int)$_GET['b'], ' = ', (int)$_GET['a'] * (int)$_GET['b'], '<br>';
            if ($op != 'none') {
                break;
            }
        case 'div':
            echo (int)$_GET['a'], ' / ', (int)$_GET['b'], ' = ', (int)$_GET['a'] / (int)$_GET['b'], '<br>';
            if ($op != 'none') {
                break;
            }
        case 'mod':
            echo (int)$_GET['a'], ' % ', (int)$_GET['b'], ' = ', (int)$_GET['a'] % (int)$_GET['b'], '<br>';
            if ($op != 'none') {
                break;
            }
        default:
            echo "Trebuie specificat unul dintre urmatorii operatori: add,sub,mult,div,mod", "<br>";
            break;
    }
} else {
    echo 'Introdu valorile a si b.';
}