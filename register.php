<?php
$con = mysqli_connect('localhost','root','','College');
if(!$con)
{
    die('Error detcting record :'.mysqli_error($con));
}
if(isset($_POST['sb1']))
{
    $username = $_POST['username1'];
    $email = $_POST['email1'];
    $password = $_POST['password1'];
    $sql = "insert into registration(Username,Email,Password) values ('$username','$email','$password')";
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