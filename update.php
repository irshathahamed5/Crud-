<?php
include'confiq.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</head>
<body>
    <div class="container">
        <div class="col-md-8">
        <form method="POST">
        <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Enter the Name</label>
    <input type="text" class="form-control" name="uname" id="exampleInputtext" aria-describedby="emailHelp" required>
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" name="uemail" id="exampleInputEmail1" aria-describedby="emailHelp" required>
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Mobile Number</label>
    <input type="number" class="form-control" name="unumber" id="exampleInputEmail1" aria-describedby="emailHelp" required>
    
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" name="upass" id="exampleInputPassword1" required>
  </div>
  <button type="submit" class="btn btn-primary" name="sub">Submit</button>
</form>
        </div>

        <?php
        $id=$_GET['updateid'];
if(isset($_POST['sub']))
{
    $name=$_POST['uname'];
    $email=$_POST['uemail'];
    $number=$_POST['unumber'];
    $password=$_POST['upass'];

    $sql="update cruds set id=$id, name='$name',mobile='$number',password='$password' where id=$id";

    $res=mysqli_query($con,$sql);
    if($res)
    {
      
      header("location:display.php");
    }
    else{
        die(mysqli_error($con));
    }
}
        ?>
    </div>
</body>
</html>