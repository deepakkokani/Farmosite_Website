<?php
$con = mysqli_connect('localhost','root','','College');
if(!$con)
{
    die('Error detcting record :'.mysqli_error($con));
}
if(isset($_POST['sb']))
{
    $email = $_POST['uemail'];
    $password = $_POST['upassword'];
    $sql = "insert into login(Email,Password) values ('$email','$password')";
    if(mysqli_query($con,$sql))
    {
        echo "<script>alert('new record inserted')</script>";
    }
    else
    {
        echo "error : ".mysqli_error($con);
    }
    mysqli_close($con);
}
?>