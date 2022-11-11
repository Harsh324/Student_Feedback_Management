<?php
session_start();
include "db_admin.php";

$Var = extract($_POST);
// echo "$Var";
// echo "/n : ";
// if(!empty($_POST['name']))
// {
//     echo $_POST['name'];
// }

// echo "/n : ";
// if(!empty($_POST['branch']))
// {
//     echo $_POST['branch'];
// }

// echo "/n : ";
// if(!empty($_POST['gender']))
// {
//     echo $_POST['gender'];
// }

// echo "/n : ";
// if(!empty($_POST['code']))
// {
//     echo $_POST['code'];
// }

// echo "/n : ";
// if(!empty($_POST['phone']))
// {
//     echo $_POST['phone'];
// }

// echo "/n : ";
// if(!empty($_POST['email']))
// {
//     echo $_POST['email'];
// }


// echo "/n : ";
// if(!empty($_POST['sec']))
// {
//     echo $_POST['sec'];
// }

// echo "/n : ";
// if(!empty($_POST['sem']))
// {
//     echo $_POST['sem'];
// }


//echo "/n : ";
if(isset($_POST))
{
    //echo "all set";
    $id             = $_POST['id'];
    $name	        = $_POST['name'];
    $branch         = $_POST['branch'];
    $gender         = $_POST['gender'];
    $phone          = $_POST['phone'];
    $email          = $_POST['email'];
    $subname        = $_POST['subname'];
    $subcode        = $_POST['subcode'];
    $section        = $_POST['sec'];
    $sem            = $_POST['sem'];


    $sql = "UPDATE faculty SET name = '$name', branch = '$branch', gender = '$gender', phone = '$phone', email = '$email', subname = '$subname', subcode = '$subcode', section = '$section' , sem = '$sem' WHERE id = '$id'";

    // $sql = "INSERT INTO faculty (name, branch, gender, phone, email, subname, subcode, section, sem, password)
    //          VALUES ('$name', '$branch', '$gender', '$phone', '$email', '$subname', '$subcode', '$section', '$sem', '$password')";

    $result = mysqli_query($conn, $sql);
    if($result)
    {
        echo "Succesfully done";
        header("Location: list_stu.php");
    }
    else
    {
        echo "some error occured";
        header("Location : updatestu.php?error = Some error occured here");
    }
}

?>