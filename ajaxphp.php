<?php

$search=$_REQUEST['name'];


if (strlen($search)<1) {
    echo "nothing found";
  
    die();
}

$names= array(
 "Anup",
 "Anna",
 "Brittany",
 "Cinderella",
 "Diana",
 "Eva",
 "Fiona",
 "Gunda",
 "Hege",
 "Inga",
 "Johanna",
 "Kitty",
 "Linda",
 "Nina",
 "Ophelia",
 "Petunia",
 "Amanda",
 "Raquel",
 "Cindy",
 "Doris",
 "Eve",
 "Evita",
 "Sunniva",
 "Tove",
 "Unni",
 "Violet",
 "Liza",
 "Elizabeth",
 "Ellen",
 "Wenche",
 "Vicky",
);

foreach ($names as $key) {
    if (strcasecmp($key[0],$search[0])==0) {
        if (stristr($key, $search)) {
            echo $key." <br> ";
        }
    }
}
