<?php
// Array cu cuvinte
$words = array(
    'cal',
    'cas'
);
$keep = array(
    'c',
    'a',
    's',
    'l'
);
// Afisarea random a cuvintelor
$word = $words[array_rand($words)];
// Daca se ghiceste litera sa se afiseze.
if (isset($_POST['letter']) && isset($_POST['submit'])) {
    if(in_array($_POST['letter'], $keep)) {
        echo $_POST['hidden1'];
    } else if(in_array($_POST['letter'], $keep[1])) {
        echo $_POST['hidden2'];
    }

    $letter = $_POST['letter'];
    $left = 0;
    $show = '';
    for ($i = 0; $i < strlen($word); ++$i) {
        if (strpos($word[$i], $letter) !== FALSE) {
            $show .= $word[$i];
        } else {
            $show .= '_';
            ++$left;
        }
        $show .= ' ';
    }
    $show = trim($show);
    echo 'Cuvantul este: ' . $show;
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <title>Spanzuratoare</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>
<form method="post" action="add.php">
    <fieldset>
        <legend>Ghiceste cuvantul:</legend>
        Introdu litera: <input type="text" name="letter"/>
        <input type="hidden" name="hidden1" value="c"/>
        <input type="hidden" name="hidden2" value="a"/>
        <input type="hidden" name="hidden3" value="s'"/>
        <input type="hidden" name="hidden" value="l"/>
        <input type="submit" name="submit" value="Ghiceste!"/>
    </fieldset>
</form>
</body>
</html>
