<?php
$menu = array();
if (TRUE === empty($menu)) {
    echo 'Meniu Inexistent.';
} else {
    echo '<ul>';
    foreach ($menu as $category) {
        echo "<li><a href='#$category'>$category</li>";
    }
    echo '</ul>';
}