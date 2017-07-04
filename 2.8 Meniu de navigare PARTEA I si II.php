<?php
$menu = array('Home', 'Contact', 'Despre');
if(TRUE === empty($menu)) {
	echo 'Meniu Inexistent.';
}
?>

<ul>
<?php
foreach ($menu as $category) {
	echo "<li><a href='#$category'>$category</li>";
}

?>
</ul>