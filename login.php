<?php
$con=new mysqli("localhost","root","","school");

$uname=$_REQUEST['user'];
$pass=$_REQUEST['pass'];
echo $uname;
echo $pass;
echo htmlspecialchars($_REQUEST['comment']);

$sql="SELECT * FROM login WHERE username=? and password=?"; 

$stmt=$con->prepare($sql);

$stmt->bind_param("ss",$uname,$pass);


$stmt->execute();

$result=$stmt->get_result();

$row=$result->fetch_assoc();




if($row!=null)
{
    header("location:success.php");
}
else{
    header("location:error.php");
}


?>