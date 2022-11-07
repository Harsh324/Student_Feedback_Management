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
<body style="margin: 50px;">
    <h1>List of Subject</h1><br>
    
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
                        <<td>". $row["subname"]. "</td>
                        <td>". $row["subcode"]. "</td>
                        <td>". $row["branch"]. "</td>
                        <td>". $row["sem"]. "</td>

                        <td>
                            <a class='btn btn-primary btn-sm' href='#'>Update</a>
                            <a class='btn btn-danger btn-sm' href='#'>Delete</a>
                        </td>
                    </tr>";
                }
            ?>
        </tbody>
    </table>
</body>
</html>

