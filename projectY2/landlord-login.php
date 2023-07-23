<?php include('server.php') ?>
<!DOCTYPE html>
<html >
<head>
  <title>Login Page</title>
  <link rel="stylesheet" href="assets/css/register.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>
<body>
  <div class="header">
  	<h2 class = "text-center my-5  ">Login</h2>
  </div>
	<div class  = "container col-lg-4"> 
  <form method="post" action="landlord-login.php">
  	<?php include('errors.php'); ?>

  	<div class="mb-3">
  		<label for = "username" class = "form-label">Username</label>
  		<input type="text" class = "form-control" name="username" >
  	</div>
	  
  	<div class=" mb-3">
  		<label for = "password" class = "form-label">Password</label>
  		<input type="password" class = "form-control" name="password">
  	</div>
  	<div class=" mb-3 ">
  		<button type="submit" class="btn btn-primary  form-control" name="login_user">Login</button>
  	</div>
  	<p>
  		Not yet a registered? <a href="landlord-register.php">
			<h5>Sign up</h5>
		</a>
  	</p>
  </form>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</body>
</html>