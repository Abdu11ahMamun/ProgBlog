<?php
	require_once('dbconfig.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");	

	


       
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Programming Hub</title>
</head>
<body>
<div class="containter ">
    <div class="row mt-5 ">
        <div class="card col-5 offset-lg-4 hero-card">
            <h2 class="text-dark display-4 d-flex justify-content-center">Member Login</h2>
            <hr>
            <form action="" method="POST" class="form-group">
                <label for="user">Username</label>:
                <input class="form-control" type="text" id="Username" name="username" placeholder="Username" required><br>
                
                <label for="password">Password</label>:
                <input class="form-control" type="Password" id="password" name="password" placeholder="Password" required><br>
                <input href="" class="btn btn-danger col-2 " type="submit" value="Login"><br><br>
            </form>

        </div>
    </div>
</div>
</body>
    
</html>



