<?php 
require 'auth.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/login.css">
</head>
<body>
	<div class="container fadeIn firs d-flex wrapper">
		<div class="row content w-75 m-auto">
			<div class="col-md-6 m-auto">
				<img src="img/motor2.png" class="img-fluid" alt="image">
			</div>
			<div class="col-md-5 m-auto">
				<div class="text-center">
					<h3 class="signin-text mb-3">Sign In</h3>
					<div class="underline-title"></div>
				</div>
				<form method="POST">
					<div class="form-group mt-2">
						<label for="IdUser">ID User</label>
						<input type="text" name="IdUser" class="form-control">
					</div>
					<div class="form-group mt-2">
						<label for="Password">Password</label>
						<input type="password" name="Password" class="form-control">
					</div>
					<div class="text-center">
						<button type="submit" name="login" id="submit-btn">Login</button>
					</div>
				</form>
			</div>
		</div>
	</div>

 	<script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script> <!-- buat modal -->  
</body>
</html>