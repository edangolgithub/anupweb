<?php
$uname=$_REQUEST['uname'];
$pass=$_REQUEST['pswd'];

$con=new mysqli("localhost", "root", "", "school");

$sql="INSERT INTO `login` (`username`, `password`) VALUES (?, ?);";

$stmt=$con->prepare($sql);

$stmt->bind_param("ss",$uname,$pass);

$val=$stmt->execute();

if($val==1)
{
    header("location:userslist.php");
}
else
{
    header("location:userform.html");
}

