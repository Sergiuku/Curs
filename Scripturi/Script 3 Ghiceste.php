<?php
// Setarea incercarilor
if (!isset($_POST['tries'])) {
    $_POST['tries'] = 5;
}
//Decrementarea incercarilor 
$_POST['tries']--;
//Introducerea numarului si ghicirea lui
if (empty((int)$_POST['number'])) {
    echo 'Asteptam dupa tine sa introduci cifra... :D';
    $_POST['answer'] = rand(1, 25);
} else if ($_POST['tries'] <= 0) {
    echo 'Ai epuizat toate incercarile =>';
    echo '<a href="add.php">Incearca din nou! </a>';
} else if ($_POST['number'] > $_POST['answer']) {
    echo 'Cifra ' . $_POST['number'] . ' este mai mare decat cifra ce trebuie ghicita. Incearca din nou. ';
} else if ($_POST['number'] < $_POST['answer']) {
    echo 'Cifra ' . $_POST['number'] . ' este mai mica decat cifra ce trebuie ghicita. Incearca din nou. ';
} else {
    echo 'Ai ghicit!! Numarul era: ' . $_POST['number'];
}
echo ' Incercari:' . $_POST['tries'];
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>
<form method="post" action="add.php">
    <fieldset>
        <legend>Ghiceste numarul:</legend>
        Introdu cifra: <input type="text" name="number"/>
        <input type="hidden" name="answer" value="<?= $_POST['answer']; ?>"/>
        <input type="hidden" name="tries" value="<?= $_POST['tries']; ?>"/>
        <input type="submit" name="submit" value="Ghiceste!"/>

    </fieldset>
</form>
</body>
</html>
