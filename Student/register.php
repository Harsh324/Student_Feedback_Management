<?php
session_start();
include "db_student.php";

if(isset($_POST))
{
    $regno      = $_POST['regno'];
    $pass       = $_POST['password'];
    $name       = $_POST['name'];

    $sql = "INSERT INTO users(name, registration_no, password) VALUES ('$name','$regno','$pass')";
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
?>
