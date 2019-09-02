<?php

//$_FILES['image']

if (isset($_POST["submit"])) {
    /* 
    foreach ($_FILES['image'] as $key => $value) {
        echo $key."---->".$value."<br>";
    }
 */

 if(file_exists("image/".$_FILES['image']['name']))
 {
     echo "file already exists";
     die();
 }
    $filename=$_FILES['image']['name'];
    $extension=substr($filename,strpos($filename,".")+1);
    switch($extension)
    {
        case "jpg":
        case "png":
        case "jpeg":
        case "gif":
        case "tiff":
         break;
         default:
         echo "that is not image";
         die("refresh browser");        
    }
    move_uploaded_file($_FILES['image']['tmp_name'],"image/".$_FILES['image']['name']);
}
 ?>