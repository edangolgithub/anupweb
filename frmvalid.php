<?php
$users=array("amrit"=>"123","kumar"=>"456","ram"=>"987");
$user=$_REQUEST['user'];
$pass=$_REQUEST['pass'];

$valid=false;
foreach ($users as $key => $value) {
    if ($user==$key && $pass==$value) {
        $valid=true;
        break;
    } else {
        $valid=false;
    }
}
if ($valid==true)
{

    echo"this login is success";
}
else {

    echo"this login is fail";
}
?>