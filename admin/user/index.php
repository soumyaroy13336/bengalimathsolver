
<?php

    require_once '../config/functions.php';
    require_once '../config/db.php';

    if(!isset($_SESSION['ID']) && !isset($_SESSION['EMAIL']))
    {
        header("location: ../login.php");
    }

    $id = $_SESSION['ID'];
    $query = "select * from user_bio where id='$id'";
    $result = mysqli_query($con,$query);
    $row = mysqli_fetch_assoc($result);

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Mathametics</title>
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

	 

<body class="bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 m-auto">
                    <div class="card mt-5">
                        <div class="card-header bg-dark text-white">
                            <h3>User Registration System</h3>
                        </div>
                        <div class="card-body">
                            <p>User Name: <span><?php echo $row['username'] ?></span></p>
                            <p>User Email: <span><?php echo $row['email'] ?></span></p>
                        </div>
                        <div class="card-footer">
                            <a href="logout.php" class="btn btn-danger float-end">Logout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>






</body>
</html>