<?php

include "db_admin.php";
if($_SERVER['REQUEST_METHOD'] == 'GET')
{
    if(!isset($_GET["id"]))
    {
        header("Location : list_fac.php?error = Unable to fetch id");
        exit();
    }
    
    $id = $_GET["id"];

    $sql = "SELECT * FROM faculty WHERE id = '$id'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();

    if(!$row)
    {
        header("Location : list_fac.php?error = Unable to fetch data");
        exit();
    }

    $name	        = $row['name'];
    $gender         = $row['gender'];
    $phone          = $row['phone'];
    $email          = $row['email'];
    $section        = $row['section'];
    $sname          = $row['subname'];
    $branch         = $row['branch'];
    $scode          = $row['subcode'];
    $sem            = $row['sem']; 
}


?>


<!DOCTYPE html>  
<html>  
    <head>  
        <meta name="viewport" content="width=device-width, initial-scale=1">  
        <style>  
            body{  
                font-family: Calibri, Helvetica, sans-serif;  
                background-color: pink;  
            }  
            .container {  
                padding: 50px;  
                background-color: lightblue;  
            }  
            
            input[type=text], input[type=password], textarea {  
                width: 100%;  
                padding: 15px;  
                margin: 5px 0 22px 0;  
                display: inline-block;  
                border: none;  
                background: #f1f1f1;  
            }  
            input[type=text]:focus, input[type=password]:focus {  
                background-color: orange;  
                outline: none;  
            }  
            div {  
                        padding: 10px 0;  
                    }  
            hr {  
                border: 1px solid #f1f1f1;  
                margin-bottom: 25px;  
            }  
            .registerbtn {  
                background-color: #4CAF50;  
                color: white;  
                padding: 16px 20px;  
                margin: 8px 0;  
                border: none;  
                cursor: pointer;  
                width: 100%;  
                opacity: 0.9;  
            }  
            .registerbtn:hover {  
                opacity: 1;  
            }  
        </style>  
    </head> 
    
    
    <body>  
        <form action="updatefacdb.php", method="post">  
            <div class="container">  
                <center>  <h1> Faculty Registration Form</h1> </center>  
                <hr>  
                <?php if(isset($_GET['error'])){ ?>
                    <p class = "error"> <?php echo $_GET['error']; ?> </p>
                <?php } ?>

                <input type="hidden" name="id", value="<?php echo $id ?>">


                <label><b> <span>Name</span> <b>
                    <input type="text", name="name", placeholder= "Name",, value="<?php echo $name ?>" required >   
                </label>  
                
                
                <div>
                    <label > <b><span> Branch </span> <b>
                        <input type="text", name="branch", placeholder= "Branch Name",, value="<?php echo $branch ?>" required >  
                        <!-- <select name="branch">
                            <option value="Branch">Branch</option>
                            <option value="CSE">CSE</option>
                            <option value="ECE">ECE</option>
                        </select> -->
                    </label>
                </div>

                <div>  
                    <label><b> <span> Gender : </span> <b><br>  
                        <input type="radio", value="Male", name="gender", checked > Male   
                        <input type="radio", value="Female", name="gender"> Female   
                        <input type="radio", value="Other", name="gender"> Other  
                        <!-- <input type="text", name="gender", placeholder= "Gender", required >   -->
                    </label>
                </div> 
                
                
                <label> <b> <span> Country code </span><b> 
                    <input type="text", name="code", placeholder="Country Code",  value="+91", size="2"> 
                </label> 
                <label> <b> <span> Phone : </span> <b>  
                    <input type="text", name="phone", placeholder="phone no.",, value="<?php echo $phone ?>" required> 
                </label> 

                <label ><b><span> Email </span> </b>
                    <input type="text", placeholder="Enter Email", name="email",, value="<?php echo $email ?>" required>  
                </label>  
                <!-- <label> <b> Roll No <b></label>
                    <input type="text" placeholder="Enter Roll No" name="rollno" id="roll"> -->

                <label><b> <span> Subject name </span> <b>  
                    <input type="text", name="subname", placeholder= "Subject Name",, value="<?php echo $sname ?>" required>
                </label> 


                <label><b> <span> Subject code <span> <b> 
                    <input type="text", name="subcode", placeholder= "Subject Code",, value="<?php echo $scode ?>"  required>
                </label>   


                <div>
                    <label > <b> <span> Section </span> <b>
                    <!-- <input type="text", name="sec", placeholder= "Section", required >   -->
                        <select name="sec">
                            <option value="Section">Section</option>
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="C">C</option>
                        </select>
                    </label>

                </div>

                <div>
                    <label>Semester
                        <input type="number", name="sem",, value="<?php echo $sem ?>" min="1", max="8">
                    </label>
                </div>

                <input type="submit", name="submit" class="registerbtn", value="Register">  

            </div>
        </form>  

    </body>  
</html>  