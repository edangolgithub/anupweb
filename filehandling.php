<?php  

// $file=fopen("anup.txt",'w');
// fwrite($file,"hello my name is anup");
// fclose($file);

// $file=fopen("anup.txt",'a');
// fwrite($file,"hello my name is not anup");
// fclose($file);



// bytes kati read garne (filesize() sabay bytes)

/* $file=fopen("anup.txt",'r');

echo fread($file,filesize("anup.txt"));
fclose($file); */


// line read garna

/*  $file=fopen("anup.txt",'r');

 while (!feof($file)) {
     echo fgets($file);
 }
fclose($file);  */

//char read garna

/* $file=fopen("anup.txt",'r');

 while (!feof($file)) {
     echo fgetc($file);
 }
fclose($file);  */

/* $count=0;

$file=fopen("anup.txt",'r');

 while (!feof($file)) {
     
     if(fgetc($file)==' ')
     {
         $count++;
    }

 }
fclose($file);
echo $count+1;
 */


$count=0;

$file=fopen("anup.txt",'r');

 while (!feof($file)) {
     
    
    fgets($file);
    
     
    $count++;
    

 }
fclose($file);
echo $count;

?>
<div>dwkfljsdoj

asklrdfjal 
dsfl
</div>