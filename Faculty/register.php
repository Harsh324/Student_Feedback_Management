<?php
session_start();
include "db_faculty.php";

if(isset($_POST))
{
    $uname      = $_POST['uname'];
    $pass       = $_POST['password'];
    $name       = $_POST['name'];

    $sql = "INSERT INTO faculty(name, user_name, password) VALUES ('$name','$uname','$pass')";
    $result = mysqli_query($conn, $sql);
    if($result)
    {
        echo "Succesfully done";
        header("Location: login.php");
    }
    else
    {
        echo "some error occured";
        header("Location : login.php?error = Some error occured here");
    }
}
else
{
    echo "Some error occured in else";
    header("Location: login.php?error = Some error occured");
}
?>
