<?php
//Array-ul bidimensional asociativ ce contine nume de papuci
$shoes = array(
    'la' => array('Lacoste', 'CoolWave', 40, 'Blue', 'Men'),
    'ad' => array('Adidas', 'Socket', 36, 'Red', 'Woman'),
    'ni' => array('Nike', 'AirMax', 31, 'Grey', 'Kids'),
    're' => array('Reebok', 'KickAss', 38, 'Black', 'Men'),
    'pu' => array('Puma', 'Bridge', 29, 'Brown', 'Kids'),
    'fi' => array('Fila', 'CloseFit', 43, 'White', 'Woman'),
    'lc' => array('LeeCooper', 'Gentlemen', 45, 'Yellow', 'Men'),
    'ck' => array('Calvin Klein', 'Locked', 44, 'Black', 'Men'),
    'nb' => array('New Balance', 'Funky', 38, 'Pink', 'Woman'),
    'gc' => array('Gucci', 'Fashion', 42, 'Brown', 'Men'),
    'br' => array('Barluti', 'LowCost', 33, 'Orange', 'Kids'),
    'bg' => array('Bugatti', 'Speed', 46, 'Orange', 'Men')
);
if (!empty($_POST['sort_a_z'])) {
    ksort($shoes);
}
if (!empty($_POST['sorat_z_a'])) {
    rsort($shoes);
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <title>Shoes</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>
<table style="border: 1px ridge; border-radius: 8px">
    <tr>
        <th>Brand</th>
        <th>Type</th>
        <th>Size</th>
        <th>Color</th>
        <th>Gender</th>
    </tr>
    <tr>
        <?php
        // Variabilele $color si array sunt folosite pentru a alterna culoarea in tabel.
        $color = array('Gainsboro', 'white');
        $count = 0;
        foreach ($shoes as $k => $v) :
        echo '<tr style="background-color: ' . $color[$count] . '">';
        $count = 1 - $count;
        ?>
        <td align="center"><?php echo $v[0]; ?></td>
        <td align="center"><?php echo $v[1]; ?></td>
        <td align="center"><?php echo $v[2]; ?></td>
        <td align="center"><?php echo $v[3]; ?></td>
        <td align="center"><?php echo $v[4]; ?></td>

    </tr>
    <?php endforeach; ?>
</table>
<form action="" method="post">
    <fieldset style="border-style:none">
    <input type="radio" name="sort_a_z" value="sort_a_z" <?= ksort($shoes); ?>/>A-Z by Brand
    <input type="radio" name="sort_z_a" value="sort_z_a" <?= arsort($shoes); ?>/>Z-A by Brand
    <input type="submit" name="submit" value="Sorteaza"/>
    </fieldset>
</form>
</body>
</html>