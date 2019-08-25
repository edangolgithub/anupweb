<?php

$users=array("anup"=>"123","ram"=>"456","shyam"=>"987");
$user=$_REQUEST['uname'];
$pass=$_REQUEST['pswd'];

$valid=false;
foreach ($users as $key => $value) {
   if($user==$key&&$pass==$value)
   {
      $valid=true;
       break;
   }
   else{
       $valid= false;
   }
}
if($valid==true)
{
    echo "login sucees";
}
else
{
    echo " login unsucess";
}



?>