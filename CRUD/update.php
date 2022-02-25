<?php 
    include ('connection.php');

    if (isset($_POST['done'])) {
        $id = $_GET['id'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $q = "UPDATE `crudtable` SET id = $id, username = '$username', password = '$password' WHERE id = '$id'";
        $query = mysqli_query($con, $q); 

        header('location: display.php');
    }
?>
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
    <div class="row mt-5">
        <div class="col-lg-4 m-auto">
            <form action="" method="post" class="form-group">
                <div class="card">
                    <div class="card-header bg-dark"><h1 class="text-center text-white">Update Operation!</h1></div>
                    <div class="card-body border-0 shadow">
                        <!--USERNAME-->
                        <label for="username">Username: </label>
                        <input class="form-control my-2" type="text" name="username" id="">
                        <!--PASSWORD-->
                        <label for="password">Password: </label>
                        <input class="form-control my-2" type="password" name="password" id="">
                        <button class="btn btn-success mx-auto d-block" name="done">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>