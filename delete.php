<?php
include 'confiq.php';
if(isset($_GET['deleteid']))
{
    $id=$_GET['deleteid'];
    $sqld="delete from cruds where id=$id";
    $res=mysqli_query($con,$sqld);
    if($res)
    {
        header("location:display.php");
    }
    else{
        die(mysqli_error($con));
    }
}
?>