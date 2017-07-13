<?php
if (isset($_POST['submit']) && !empty(isset($_POST['submit']))) {
    if (isset($_POST['a']) && isset($_POST['op']) && isset($_POST['b']) && $_POST['a'] && $_POST['op'] && $_POST['b']) {
        switch ($_POST['op']) {
            case 'add':
                echo (int)$_POST['a'], ' + ', (int)$_POST['b'], ' = ', $_POST['a'] + $_POST['b'];
                break;
            case 'sub':
                echo (int)$_POST['a'], ' - ', (int)$_POST['b'], ' = ', $_POST['a'] - $_POST['b'];
                break;
            case 'mul':
                echo (int)$_POST['a'], ' * ', (int)$_POST['b'], ' = ', $_POST['a'] * $_POST['b'];
                break;
            case 'div':
                echo (int)$_POST['a'], ' / ', (int)$_POST['b'], ' = ', $_POST['a'] / $_POST['b'];
                break;
            case 'mod':
                echo (int)$_POST['a'], ' % ', (int)$_POST['b'], ' = ', $_POST['a'] % $_POST['b'];
                break;
            default:
                echo (int)$_POST['a'], ' + ', (int)$_POST['b'], ' = ', $_POST['a'] + $_POST['b'], '<br>';
                echo (int)$_POST['a'], ' - ', (int)$_POST['b'], ' = ', $_POST['a'] - $_POST['b'], '<br>';
                echo (int)$_POST['a'], ' * ', (int)$_POST['b'], ' = ', $_POST['a'] * $_POST['b'], '<br>';
                echo (int)$_POST['a'], ' / ', (int)$_POST['b'], ' = ', $_POST['a'] / $_POST['b'], '<br>';
                echo (int)$_POST['a'], ' % ', (int)$_POST['b'], ' = ', $_POST['a'] % $_POST['b'], '<br>';
        }
    } else {
        echo 'Trebuie introdus a si b';
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
