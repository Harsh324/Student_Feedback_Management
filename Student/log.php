<?php
session_start();
include "db_student.php";

if(isset($_POST['rollno']) && isset($_POST['password']))
{
    function validate($data)
    {
        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
}

$rollno = validate($_POST['rollno']);
$pass = validate($_POST['password']);



if(empty($rollno))
{
    header ("Location: login.php?error = User Name is required");
    exit();
}
else if(empty($pass))
{
    header ("Location: login.php?error = Password is required");
    exit();
}


$sql = "SELECT * FROM student WHERE rollno = '$rollno' AND password = '$pass'";

$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) === 1)
{
    $row = mysqli_fetch_assoc($result);
    if($row['rollno'] === $rollno && $row['password'] == $pass)
    {
        echo "Logged in";
        $_SESSION['rollno'] = $row['rollno'];
        $_SESSION['name'] = $row['name'];
        $_SESSION['id'] = $row['id'];
        header("Location: home.php");
        exit();
    }
    else
    {
        header("Location: login.php?error = Incorrect User Name or Password");
    }
}
else
{
    echo "user not registered";
    header("Location: login.php?error = user not registered");
    exit();
}
?>
