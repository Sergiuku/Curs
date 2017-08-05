<?php
if (isset($_POST['a']) && isset($_POST['b']) && isset($_POST['submit'])) {
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
            echo 'Trebuie specificat a, b sau operatorul.', "<br>";
            break;
    }
}
?>
<html>
<body>
<h2>Calculator</h2>
<form method="POST">
    <label for="a">Numar a:</label>
    <input type="text" name="a" id="a"/>
    <label for="b">Numar b:</label>
    <input type="text" name="b" id="b"/>
    <label for="op">Specifica operatia(add,sub,mul,div,mod):</label>
    <input type="text" name="op" id="op"/>
    <input type="submit" name="submit" value="Calculeaza"/>
    </select>
</form>
</body>
</html>
