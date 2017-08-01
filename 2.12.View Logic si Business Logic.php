<?php
if (isset($_POST['submit']) && !empty(isset($_POST['submit']))) {
    if (isset($_POST['a']) && isset($_POST['b']) && !empty($_POST['a']) && !empty($_POST['b'])) {
        $op = NULL;
        if (isset($_POST['op'])) {
            $op = $_POST['op'];
        }
        switch ($op) {
            case NULL:
            case '':
                if (trim($op) === '') {
                    $op = NULL;
                }
            case 'add':
                echo (int)$_POST['a'], ' + ', (int)$_POST['b'], ' = ', (int)$_POST['a'] + (int)$_POST['b'], '<br>';
                if (isset($op)) {
                    break;
                }

            case 'sub':
                echo (int)$_POST['a'], ' - ', (int)$_POST['b'], ' = ', (int)$_POST['a'] - (int)$_POST['b'], '<br>';
                if (isset($op)) {
                    break;
                }
            case 'mul':
                echo (int)$_GET['a'], ' * ', (int)$_GET['b'], ' = ', (int)$_GET['a'] * (int)$_GET['b'], '<br>';
                if (isset($op)) {
                    break;
                }
            case 'div':
                echo (int)$_POST['a'], ' / ', (int)$_POST['b'], ' = ', (int)$_POST['a'] / (int)$_POST['b'], '<br>';
                if (isset($op)) {
                    break;
                }
            case 'mod':
                echo (int)$_POST['a'], ' % ', (int)$_POST['b'], ' = ', (int)$_POST['a'] % (int)$_POST['b'], '<br>';
                if (isset($op)) {
                    break;
                }

        }
    } else {
        echo 'Introdu valorile a si b.';
    }
}
?>
<html>
<body>
<h2>Calculator</h2>
<form method="POST">
    <label for="a">Numar:</label>
    <input type="text" name="a" id="a"/>
    <label for="a">Numar:</label>
    <input type="text" name="b" id="b"/>
    <label for="a">Specifica operatia(add,sub,mul,div,mod):</label>
    <input type="text" name="op" id="op"/>
    <input type="submit" name="submit" value="Calculeaza"/>
    </select>
</form>
</body>
</html>
