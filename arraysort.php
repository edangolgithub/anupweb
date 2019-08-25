<?php
$ar=array(11,5,8,3,1,10,7,9);

rsort($ar);

for ($i=0; $i <count($ar) ; $i++) { 
   echo $ar[$i]."<br>";
}

$salary=array("ram"=>12345,"shyam"=>200,"hari"=>30000);

krsort($salary);

foreach ($salary as $key => $value) {
   
    echo $key." => ".$value;
}


?>