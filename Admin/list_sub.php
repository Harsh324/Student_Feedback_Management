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

    <link href="https://cdn.datatables.net/1.12.0/css/dataTables.bootstrap5.min.css" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="https://cdn.datatables.net/1.12.0/js/jquery.dataTables.min.js"></script>

    <script src="https://cdn.datatables.net/1.12.0/js/dataTables.bootstrap5.min.js"></script>
    <?php
        include "header.php";
    ?>


    <title>Table</title>
</head>
<body>
        <div class="container-fluid">
            
            <h1 class="mt-4 mb-4 text-center text-primary">List of Subjects</h1>
            <span id="message"></span>
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col col-sm-9"><a class='btn btn-success btn-sm float-left' href='home.php'>Home</a></div>
                        <div class="col col-sm-3">
                            <a class='btn btn-success btn-sm float-end' href='subject_register.php'>Add Subject</a>
                            <!-- <button type="button" id="add_data" class="btn btn-success btn-sm float-end">Add</button> -->
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered" id="sample_data">
                        <thead>
                                <tr>
                                    <th>S.No</th>
                                    <th>Subject Name</th>
                                    <th>Subject Code</th>
                                    <th>Branch</th>
                                    <th>Semseter</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php
                                    
                                    $sql = "SELECT * FROM subject";
                                    $result = $conn->query($sql);

                                    if(!$result)
                                    {
                                        die("invalied query: " . $conn->error);
                                    }

                                    while($row = $result->fetch_assoc())
                                    {
                                        echo "<tr>
                                            <td>". $row["id"]. "</td>
                                            <td>". $row["subname"]. "</td>
                                            <td>". $row["subcode"]. "</td>
                                            <td>". $row["branch"]. "</td>
                                            <td>". $row["sem"]. "</td>

                                            <td>
                                                <a class='btn btn-primary btn-sm' href='updatesub.php?id=$row[id]'>Update</a>
                                                <a class='btn btn-danger btn-sm' href='delete.php?id=$row[id]&Type=Sub'>Delete</a>
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

    <!-- <div class="container my-5">

        <h1>List of Subjects</h1><br>
        <a class='btn btn-primary btn-sm' href='subject_register.php'>Add Subject</a> <br> <br>

        <table class="table">
            <thead>
                <tr>
                    <th>S.No</th>
                    <th>Subject Name</th>
                    <th>Subject Code</th>
                    <th>Branch</th>
                    <th>Semseter</th>
                </tr>
            </thead>

            <tbody>
            </tbody>
        </table>
    </div> -->
</body>
</html>

