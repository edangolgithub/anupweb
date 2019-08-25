<!DOCTYPE html>
<html lang="en">
<head>
    <?php
   // require_once "con.php";
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- bootstrap css cdn -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <!-- bootstrap js cdn -->
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script>
    $(function(){
       
    })
    </script>

</head>
<body>

<?php


 $con=new mysqli("localhost", "root", "", "school");

$sql="select * from login";

$result= $con->query($sql);
  

    


?>
<div class="jumbotron container m-5 p-5">
   <table class="table table-hover table-dark">
       <tr><th>ID</th><th>User Name</th><th>Password</th><th>Action</th></tr>
<?php
while ($row=$result->fetch_assoc()) {
    ?>
 <tr> 
 <td><?php echo $row['loginid']; ?></td>
 <td><?php echo $row['username']; ?></td>
 <td><?php echo $row['password']; ?></td>
 <td> <a href="useredit.php?id=<?php echo $row['loginid']; ?>"> <button class="btn btn-warning">Edit</button></a> </td>
 <td> <a href="userdelete.php?id=<?php echo $row['loginid']; ?>"> <button class="btn btn-danger">Delete</button></a></td>
 </tr>
<?php
}

?>

   </table>
  <a href="userform.html"> <button class="btn btn-primary">Add</button></a>
   </div>
</body>
</html>