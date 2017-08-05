<?php
$fructe = array(
    'mere' => 'Merele contin multi antioxidanti.',
    'pere' => 'Perele sunt bogate in vitamina C si in potasiu.',
    'alune' => 'Alunele sunt bogate in proteine , grasimi nesaturate si vitamina B6.'
);

if (isset($_GET['fructe']) && isset($_GET['submit'])) {
    foreach ($_GET['fructe'] as $fruct) {
        if($fruct == array_key_exists($fruct, $fructe)) {
            echo '<p>', $fructe[$fruct], '</p>';
        } else {
            echo 'Fructul nu exista.';
        }
    }
}
?>
<form method="GET">
    <?php
    foreach ($fructe as $fruct => $value) {
        echo '<input type="checkbox" name="fructe[]" value="' . $fruct . '" id="fruct-id"/><label for="fruct-id">' . $fruct . '</label>';
    }
    ?>
    <input type="submit" name="submit" value="Trimite"/>
</form>