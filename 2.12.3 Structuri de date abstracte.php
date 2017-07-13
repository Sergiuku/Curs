<?php
$fructe = array(
    'mere ' => 'Merele contin multi antioxidanti.',
    'pere ' => 'Perele sunt bogate in vitamina C si in potasiu.',
    'alune ' => 'Alunele sunt bogate in proteine , grasimi nesaturate si vitamina B6.'
);
if (isset($_GET['submit']) && isset($_GET['fructe'])) {
    foreach ($_GET['fructe'] as $fruct) {
        echo '<p>', $fructe[$fruct], '</p>';
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