<?php
$words = array(
    'cal',
    'cas'
);
$word = $words[array_rand($words)];
echo 'Cuvantul este un obiect, alcatuit din:';
for ($i = 0; $i < strlen($word); $i++) {
    echo ' _ ';
}
echo ' litere'."<br>";
if (isset($_POST['letter']) && isset($_POST['submit'])) {
    $letter = $_POST['letter'];
    if(strpos($word, $letter) !== false) {
        echo 'Ai ghicit litera: '.$letter;
    }
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
<form method="post" action="index.php">
    <fieldset>
        <legend>Ghiceste cuvantul:</legend>
        Introdu litera: <input type="text" name="letter"/>
        <input type="submit" name="submit" value="Ghiceste!"/>
    </fieldset>
</form>
</body>
</html>
