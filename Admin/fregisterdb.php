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
    $name	        = $_POST['name'];
    $branch         = $_POST['branch'];
    $gender         = $_POST['gender'];
    $phone          = $_POST['phone'];
    $email          = $_POST['email'];
    $subname        = $_POST['subname'];
    $subcode        = $_POST['subcode'];
    $section        = $_POST['sec'];
    $sem            = $_POST['sem'];
    $password	    = "ABCD";

    $sql = "INSERT INTO faculty (name, branch, gender, phone, email, subname, subcode, section, sem, password)
             VALUES ('$name', '$branch', '$gender', '$phone', '$email', '$subname', '$subcode', '$section', '$sem', '$password')";


    $result = mysqli_query($conn, $sql);
    if($result)
    {
        echo "Succesfully done";
        header("Location: home.php");
    }
    else
    {
        echo "some error occured";
        header("Location : facutly_register.php?error = Some error occured here");
    }
}