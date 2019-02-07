<?php 
require_once "lib/db-connection.php";

$email = $_POST['email'];
$password = $_POST['password'];

$users = $con->query("SELECT * FROM users WHERE email = '$email'");

if($users->num_rows > 0) {
    $userData = $users->fetch_assoc();
    if(($userData['password'] == $password) && ($userData['role'] == 1)) {
        header("location: admin-panel.php");
        exit();
    }
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/all.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Admin Sign-In</title>
</head>
<body>
<div class="admin-form">
    <form class="form" action="" method="post">
        <div class="form-group">
            <label class="col-md-2 control-label">E-mail</label>
            <div class="col-md-10">
                <input type="email" name="email" class="form-control" placeholder="Your e-mail">
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-2 control-label">Password</label>
            <div class="col-md-10">
                <input type="password" name="password" class="form-control" placeholder="Your Password">
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-2 col-md-offset-10">
                <button class="btn btn-primary" type="submit">Sign In</button>
            </div>
        </div>
    </form>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="js/bootstrap.min.js"></script>

</body>
</html>
