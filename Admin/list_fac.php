<?php
    include "db_admin.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Table</title>
</head>

    <body>

        <div class="container-fluid">
            <h1 class="mt-4 mb-4 text-center text-primary">List of Faculty</h1>
            <span id="message"></span>
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col col-sm-9"><a class='btn btn-success btn-sm float-left' href='home.php'>Home</a></div>
                        <div class="col col-sm-3">
                        <a class='btn btn-success btn-sm float-end' href='faculty_register.php'>Add Faculty</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered" id="sample_data">
                        <thead>
                                <tr>
                                    <th>S.No</th>
                                    <th>Name</th>
                                    <th>Branch</th>
                                    <th>Gender</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th>Subject Name</th>
                                    <th>Subject Code</th>
                                    <th>Section</th>
                                    <th>Semseter</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php
                                    
                                    $sql = "SELECT * FROM faculty";
                                    $result = $conn->query($sql);

                                    if(!$result)
                                    {
                                        die("invalied query: " . $conn->error);
                                    }

                                    while($row = $result->fetch_assoc())
                                    {
                                        echo "<tr>
                                            <td>". $row["id"]. "</td>
                                            <td>". $row["name"]. "</td> 
                                            <td>". $row["branch"]. "</td>
                                            <td>". $row["gender"]. "</td>
                                            <td>". $row["phone"]. "</td>
                                            <td>". $row["email"]. "</td>
                                            <td>". $row["subname"]. "</td>
                                            <td>". $row["subcode"]. "</td>
                                            <td>". $row["section"]. "</td>
                                            <td>". $row["sem"]. "</td>

                                            <td>
                                                <a class='btn btn-primary btn-sm' href='updatefac.php?id=$row[id]'>Update</a>
                                                <a class='btn btn-danger btn-sm' href='delete.php?id=$row[id]&Type=Fac'>Delete</a>
                                            </td>
                                        </tr>";
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </body>

<!-- <body style="margin: 50px;">
    <h1>List of Faculty</h1>
    <br>
    <table class="table">
        <thead>
            <tr>
                <th>S.No</th>
                <th>Name</th>
                <th>Branch</th>
                <th>Gender</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Subject Name</th>
                <th>Subject Code</th>
                <th>Section</th>
                <th>Semseter</th>
            </tr>
        </thead>

        <tbody>
            
        </tbody>
    </table>
</body> -->
</html>

