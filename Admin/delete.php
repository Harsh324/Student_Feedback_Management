<?php

include "db_admin.php";

if($_SERVER['REQUEST_METHOD'] == 'GET')
{
    if(!isset($_GET["Type"]))
    {
        header("Location : list_stu.php?error = Unable to fetch id");
        exit();
    }
    
    $Type = $_GET["Type"];
    if($Type == "Fac")
    {
        $id = $_GET["id"];
        $sql = "DELETE FROM faculty WHERE id = '$id'";
        $result = mysqli_query($conn, $sql);
        if($result)
        {
            echo "Succesfully done";
            header("Location: list_fac.php");
        }
        else
        {
            echo "some error occured";
            header("Location : list_fac.php?error = Some error occured here");
        }
    }
    else if($Type == "Sub")
    {
        $id = $_GET["id"];
        $sql = "DELETE FROM subject WHERE id = '$id'";
        $result = mysqli_query($conn, $sql);
        if($result)
        {
            echo "Succesfully done";
            header("Location: list_sub.php");
        }
        else
        {
            echo "some error occured";
            header("Location : list_sub.php?error = Some error occured here");
        }
    }
    else if($Type == "Stu")
    {
        $rollno = $_GET["rollno"];
        $sql = "DELETE FROM student WHERE rollno = '$rollno'";
        $result = mysqli_query($conn, $sql);
        if($result)
        {
            echo "Succesfully done";
            header("Location: list_stu.php");
        }
        else
        {
            echo "some error occured";
            header("Location : list_stu.php?error = Some error occured here");
        }
    }
    else
    {
        echo "Some error occured";
        exit();
    }

    

    // $sql = "SELECT * FROM student WHERE rollno = '$rollno'";
    // $result = $conn->query($sql);
    // $row = $result->fetch_assoc();

    // if(!$row)
    // {
    //     header("Location : list_stu.php?error = Unable to fetch data");
    //     exit();
    // }

    // $name	        = $row['name'];
    // $branch         = $row['branch'];
    // $gender         = $row['gender'];
    // $phone          = $row['phone'];
    // $email          = $row['email'];
    // $rollno         = $row['rollno'];
    // $section        = $row['section'];
    // $sem            = $row['sem'];
}


?>