<?php
session_start();
include "db_admin.php";

$Var = extract($_POST);
// echo "$Var";


// echo "/n : ";
// if(!empty($_POST['branch']))
// {
//     echo $_POST['branch'];
// }

// echo "/n : ";
// if(!empty($_POST['subname']))
// {
//     echo $_POST['subname'];
// }


// echo "/n : ";
// if(!empty($_POST['subcode']))
// {
//     echo $_POST['subcode'];
// }


// echo "/n : ";
// if(!empty($_POST['sem']))
// {
//     echo $_POST['sem'];
// }

if(isset($_POST))
{
    $sname         = $_POST['subname'];
    $branch        = $_POST['branch'];
    $scode         = $_POST['subcode'];
    $sem           = $_POST['sem']; 

    $sql = "INSERT INTO subject(subname, branch, subcode, sem) VALUES ('$sname','$branch', '$scode', '$sem')";
    $result = mysqli_query($conn, $sql);
    if($result)
    {
        echo "Succesfully done";
        header("Location: home.php");
    }
    else
    {
        echo "some error occured";
        header("Location : subject_register.php.php?error = Some error occured here");
    }
}
else
{
    echo "Some error occured in else";
    header("Location: subject_register.php?error = Some error occured");
}
?>
