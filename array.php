<?php

$ar=array(11,5,8,3,1,10,7,9);

for ($i=0; $i <8 ; $i++) { 
   echo $ar[$i]."<br>";
}

foreach ($ar as $element) {
  echo $element."<br>";
}

$names=array("ram","shyam","hari");
for ($i=0; $i <3 ; $i++) { 
    echo $names[$i]."<br>";
 }
 foreach ($names as $element) {
    echo $element."<br>";
  }

  $salary=array("ram"=>12345,"shyam"=>20000,"hari"=>30000);


  echo $salary["hari"];

  foreach ($salary as $key => $value) {
   echo $value.$key; 
  }


   // 2,1,4,7,3,9

   // 1 2 3   00 01 02
   // 4 5 6   10 11 12
   // 7 8 9   20 21 22 
   
   
   $matrix=array(
       array(1,2,3),
       array(4,5,6),
       array(7,8,9)
   );
echo "<br>";
   for ($i=0; $i <3 ; $i++) { 
       for ($j=0; $j <3; $j++) { 
         echo $matrix[$i][$j];
       }
       echo "<br>";
   }
echo $matrix[1][2];

?>