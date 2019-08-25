 <!-- bootstrap css cdn -->
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- bootstrap js cdn -->
    <script src="https://code.jquery.com/jquery-3.4.1.js"
        integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
<?php

$id=0;
if($_GET)
{
$id= $_REQUEST['id'];
$con=new mysqli("localhost", "root", "", "school");


$sql="select * from login where loginid=".$id;

$result= $con->query($sql);

$row=$result->fetch_assoc();
}

if($_POST)
{
    $id= $_REQUEST['id'];
    $username=$_REQUEST['uname'];
    $password=$_REQUEST['pswd'];
$con=new mysqli("localhost", "root", "", "school");


$sql="update login set username=?, password=? where loginid=?";

$stmt=$con->prepare($sql);
$stmt->bind_param("ssi",$username,$password,$id);
$stmt->execute();
header("location:userslist.php");
}

?>



<div class="jumbotron container m-5 p-5 bg-secondary">
        <form action="" class="was-validated" method="post">
            <div class="form-group">
                <label for="uname">Username:</label>
                <input type="text" class="form-control" id="uname" placeholder="Enter username" name="uname" value="<?php echo $row['username']; ?>" required>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            <div class="form-group">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd" value="<?php echo $row['password']; ?>" required>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>

            <input type="hidden" name="id" value="<?php echo $id; ?>">

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>