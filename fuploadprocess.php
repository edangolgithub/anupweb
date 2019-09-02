<?php

//$_FILES['image']

if (isset($_POST["submit"])) {
    /* 
    foreach ($_FILES['image'] as $key => $value) {
        echo $key."---->".$value."<br>";
    }
 */
    move_uploaded_file($_FILES['image']['tmp_name'],"image/".$_FILES['image']['name']);
}
 ?>