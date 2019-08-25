<?php
function xyz()
{
    return "hello how are you";
}
echo xyz();


function apple($a,$b,$c,$d)
{
    return $a.$b.$c.$d;
}

echo apple("an","u","p","   magar");
$a=1;
$b=5;
$c=$a+$b;

echo '<h1>'.$c.'</h1>';

?>

<?php


$x=10;


switch ($x) {
        case 10:
        echo "10";
        break;
        case 5:
        echo 5;
        break;
        case 6:
        echo "6";
        break;
        case 1:
        echo "1";
        break;
    
    default:
    echo "other";
        break;
}

echo "<ul>";
for($i=0;$i<10;$i++)
{
echo "<li>".$i."</li>";
}
echo "</ul>";

$i=0;
while($i<10)
{
    echo "<h1>".$i."</h1>";
    $i++;
}

function abc()
{
    echo "hello hi";
}
abc();
abc();
abc();
?>