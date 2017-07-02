<!DOCTYPE html>
<html>
<body>
<ul>
        <?php
        $menu = array('Home','Contact ','Despre');
        if(TRUE === empty($menu)){
            echo 'Meniu Inexistent';
        } else {
        foreach ($menu as $category) {
                echo  "<li><a href='$category'>$category</li>";
            }
        }
        ?>
</ul>
</body>
</html>