<?php
include'confiq.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>display</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</head>
<body>
    <div class="container mt-5">
        <div class="col-md-8">
            <button class="btn btn-primary"><a href="user.php" style="color:aliceblue">Add</a></button>
        </div>
        <div class="col-md-8 mt-5" >
        <table class="table">
  <thead class="table-dark">
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Number</th>
        <th>Password</th>
        <th>Options</th>
    </tr>
  </thead>
  <?php
$sql2="select * from cruds";
$res=mysqli_query($con,$sql2);
while($val=mysqli_fetch_assoc($res))
{
    $id=$val['id'];
    $name=$val['name'];
    $email=$val['email'];
    $number=$val['mobile'];
    
    $password=$val['password'];
echo "<tbody>
<tr>
<td>$name</td>
<td>$email</td>
<td>$number</td>
<td>$password</td>
<td> <button class='btn btn-success'><a href='update.php?updateid=$id'style='color:aliceblue'>Update</a></button>
<button class='btn btn-danger'><a href='delete.php?deleteid=$id'style='color:aliceblue'>delete</a></button></td>
</tr>

</tbody>";
}
?>
</table>
        </div>
       
    </div>
</body>
</html>