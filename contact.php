<?php
$con = mysqli_connect('localhost','root','','College');
if(!$con)
{
    die('Error detcting record :'.mysqli_error($con));
}
if(isset($_POST['sb2']))
{
    $name = $_POST['name2'];
    $email = $_POST['email2'];
    $message = $_POST['message2'];
    $sql = "insert into contact(Name,Email,Message) values ('$name','$email','$message')";
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