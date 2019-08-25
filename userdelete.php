<?php

$id= $_REQUEST['id'];
$con=new mysqli("localhost", "root", "", "school");

$sql="delete from login where loginid=?";

$stmt=$con->prepare($sql);

$stmt->bind_param("i",$id);

$val=$stmt->execute();


header("location:userslist.php");





?>