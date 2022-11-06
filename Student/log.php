<?php
session_start();
include "db_student.php";

if(isset($_POST['regno']) && isset($_POST['password']))
{
    function validate($data)
    {
        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
}

$regno = validate($_POST['regno']);
$pass = validate($_POST['password']);



if(empty($regno))
{
    header ("Location: login.php?error = User Name is required");
    exit();
}
else if(empty($pass))
{
    header ("Location: login.php?error = Password is required");
    exit();
}


$sql = "SELECT * FROM users WHERE registration_no = '$regno' AND password = '$pass'";

$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) === 1)
{
    $row = mysqli_fetch_assoc($result);
    if($row['registration_no'] === $regno && $row['password'] == $pass)
    {
        echo "Logged in";
        $_SESSION['registration_no'] = $row['registration_no'];
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
