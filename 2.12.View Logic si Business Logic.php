<?php
if (isset($_POST['a']) && isset($_POST['b']) && isset($_POST['submit'])) {
    $a = $_POST['a'];
    $b = $_POST['b'];
    switch ($_POST['op']) {
        case 'add':
            echo $a, ' + ', $b, ' = ', $a + $b, '<br>';
            break;
        case 'sub':
            echo $a, ' - ', $b, ' = ', $a - $b, '<br>';
            break;
        case 'mul':
            echo $a, ' * ', $b, ' = ', $a * $b, '<br>';
            break;
        case 'div':
            echo $a, ' / ', $b, ' = ', $a / $b, '<br>';
            break;
        case 'mod':
            echo $a, ' % ', $b, ' = ', $a % $b, '<br>';
            break;
        default:
            echo 'Trebuie specificat unul dintre numere sau operatul.', "<br>";
            break;
    }
}
?>
<html>
<body>
<h2>Calculator</h2>
<form method="POST">
    <label for="a">Numar:</label>
    <input type="number" name="a" id="a"/>
    <label for="b">Numar:</label>
    <input type="number" name="b" id="b"/>
    <label for="op">Specifica operatia(add,sub,mul,div,mod):</label>
    <input type="text" name="op" id="op"/>
    <input type="submit" name="submit" value="Calculeaza"/>
    </select>
</form>
</body>
</html>
