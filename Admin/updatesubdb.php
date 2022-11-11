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
    $id            = $_POST['id'];
    $sname         = $_POST['subname'];
    $branch        = $_POST['branch'];
    $scode         = $_POST['subcode'];
    $sem           = $_POST['sem']; 

    $sql = "UPDATE subject SET subname = '$sname', branch = '$branch', subcode = '$scode', sem = '$sem' WHERE id = '$id'";
    $result = mysqli_query($conn, $sql);
    if($result)
    {
        echo "Succesfully done";
        header("Location: list_sub.php");
    }
    else
    {
        echo "some error occured";
        header("Location : updatesub.php.php?error = Some error occured here");
    }
}
else
{
    echo "Some error occured in else";
    header("Location: updatesub.php?error = Some error occured");
}
?>
