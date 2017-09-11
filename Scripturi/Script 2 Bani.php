<?php
$money = array(500, 200, 100, 50, 10, 5, 1);
$nr = 0;
if (isset($_POST['submit']) && isset($_POST['amount']) && !empty($_POST['amount']) && is_numeric($_POST['amount'])) {
    $amount = (int)$_POST['amount'];
    echo 'amount este formata din ';
    foreach ($money as $m) {
        $money[$m] = (int)($amount / $m);
        $amount = $amount % $m;
        if ($money[$m] !== 0) {
            $nr = $nr + $money[$m];
            echo $money[$m] . ' bucati de ' . "<strong>" . $m . "</strong>" . ', ';
        }
    }
    echo ' numarul total de bucati fiind ' . "<strong>" . $nr . "</strong>" . '.';
} else {
    echo 'Introdu o valoare valida!';
}


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <title>money</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>
<form action="index.php" method="post">
    <fieldset>
        <legend>Calculator Bancnote</legend>
        Introduceti suma: <input type="text" name="amount"/>
        <input type="submit" name="submit" value="Calculeaza"/>
    </fieldset>
</form>
</body>
</html>

