<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD OPERATION</title>
    <link rel="stylesheet" href="style.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body class="bg-light">
    <div class="container-fluid">
        <div class="row mt-5">
            <div class="col-lg-12">
                <table class="table table-striped table-hover table-bordered shadow">
                    <tr class="bg-dark text-white">
                        <th>ID</th>
                        <th>USERNAME</th>
                        <th>PASSWORD</th>
                        <th>DELETE</th>
                        <th>UPDATE</th>
                    </tr>
                    <?php
                         include ('connection.php');

                         $q = "SELECT * FROM crudtable";
                         $query = mysqli_query($con, $q); 

                         while ($response = mysqli_fetch_array($query)) {
                    ?>
                    <tr>
                        <td><?php echo $response['id']; ?></td>
                        <td><?php echo $response['username']; ?></td>
                        <td><?php echo $response['password']; ?></td>
                        <td>
                            <button class="btn btn-danger">
                                <a class="text-white" href="delete.php?id=<?php echo $response['id']; ?>">Delete</a>
                            </button>
                        </td>
                        <td>
                            <button class="btn btn-primary">
                                <a class="text-white" href="update.php?id=<?php echo $response['id']; ?>">Update</a>
                            </button>
                        </td>
                    </tr>
                    <?php
                         }
                    ?>
                </table>
            </div>
        </div>
    </div>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>