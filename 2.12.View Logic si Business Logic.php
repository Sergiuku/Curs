<?php
if (isset($_POST['submit']) && !empty(isset($_POST['submit']))) {
    if (isset($_POST['a']) && isset($_POST['b']) && !empty($_POST['a']) && !empty($_POST['b'])) {
        switch ($_POST['op']) {
            case 'add':
                echo (int)$_POST['a'], ' + ', (int)$_POST['b'], ' = ', (int)$_POST['a'] + (int)$_POST['b'], '<br>';
                break;
            case 'sub':
                echo (int)$_POST['a'], ' - ', (int)$_POST['b'], ' = ', (int)$_POST['a'] - (int)$_POST['b'], '<br>';
                break;
            case 'mul':
                echo (int)$_POST['a'], ' * ', (int)$_POST['b'], ' = ', (int)$_POST['a'] * (int)$_POST['b'], '<br>';
                break;
            case 'div':
                echo (int)$_POST['a'], ' / ', (int)$_POST['b'], ' = ', (int)$_POST['a'] / (int)$_POST['b'], '<br>';
                break;
            case 'mod':
                echo (int)$_POST['a'], ' % ', (int)$_POST['b'], ' = ', (int)$_POST['a'] % (int)$_POST['b'], '<br>';
                break;
            default:
                echo "Trebuie specificat unul dintre urmatorii operatori: add,sub,mult,div,mod", "<br>";
                break;
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
    <label for="b">Numar:</label>
    <input type="text" name="b" id="b"/>
    <label for="op">Specifica operatia(add,sub,mul,div,mod):</label>
    <input type="text" name="op" id="op"/>
    <input type="submit" name="submit" value="Calculeaza"/>
    </select>
</form>
</body>
</html>
