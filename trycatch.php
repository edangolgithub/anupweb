<?php

//try catch throw finally
$anx='';
$error="";
$first="";
$second="";
if (isset($_POST['su'])) {
    try {
        $first=$_REQUEST['x'];
        $second=$_REQUEST['y'];
       if(!is_numeric($first)|| !is_numeric($second))
       {
        throw new Exception("Please make sure you input numbers only");
       }
        if ($second==0) {
            throw new Exception("Please make sure second number is not zero");
        }
        $anx=$first/$second;
    }
     catch (Exception $e) {
       $error= $e->getMessage();
    }
    finally{

    }
}


?>


<!-- bootstrap css cdn -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<!-- bootstrap js cdn -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<div class="container jumbotron  m-5">
    
<form action="" method="post">
<div class="form-group">
  <label for=""></label>
  <input type="text" name="x" id="" class="form-control" value="<?php echo $first?>" placeholder="first number" aria-describedby="helpId">
  <small id="helpId" class="text-muted">Help text</small>
</div>
<div class="form-group">
  <label for=""></label>
  <input type="text" name="y" id="" class="form-control" value="<?php echo $second?>" placeholder="second number" aria-describedby="helpId">
  <small id="helpId" class="text-muted">Help text</small>
</div>
<button type="submit"  name="su" class="btn btn-primary">divide</button>
<h1 class="text-info"><?php echo $anx;?></h1>
<h1 class="text-danger"><?php echo $error;?></h1>
</form>
</div>

<table class="table table-striped table-inverse table-responsive">
    <thead class="thead-inverse">
        <tr>
            <th>id</th>
            <th>name</th>
            <th>photo</th>
        </tr>
<?php

?>
            <tr>
                <td scope="row"></td>
                <td></td>
                <td></td>
            </tr>
   
</table>