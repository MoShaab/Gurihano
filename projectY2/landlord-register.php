<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Register</title>
  <!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
  <link rel="stylesheet" href="assets/css/register.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>
<body>

  	<h2 class = "text-center my-3">Register</h2>

<div class = "container col-lg-4" >
	 <form method="post" action="landlord-register.php">
  	<?php include('errors.php'); ?>
  	<div class=" mb-3">
  	  <label for = "username" class = "form-label">Username</label>
	  <br>
  	  <input type="text" class = "form-control" name="username" required value="<?php echo $username; ?>">
	
  	</div>

  	<div class=" mb-3 " >
  	  <label for = "landlord-email" class = "form-label">Email</label>
	  <br>
  	  <input type="email" class = "form-control" name="landlord_email" aria-describedby="emailHelp" required value="<?php echo $landlord_email; ?>">
	  <br>
		<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  	</div>
	
	  <div class=" mb-3">
  	  <label for = "phone" class = "form-label">Phone Number</label>
	  <br>
  	  <input type="number" class = "form-control" name="phone" value="<?php echo $phone; ?>">
	
  	</div>
	
  	<div class=" mb-3">
  	  <label for = "password" class = "form-label">Password</label>
	  <br>
  	  <input type="password" class ="form-control" name="password_1" required>
	  
  	</div>
	
  	<div class=" mb-3" >
  	  <label for = "password" class = "form-label">Confirm password</label>
	  <br>
  	  <input type="password" class = "form-control" name="password_2" required>
	  
  	</div>
	<br>
  	<div class=" mb-3">
  	  <button type="submit" class="btn btn-primary form-control" name="reg_user" >Register</button>
	  
  	</div>
	
  	
  		
  </form>
</div>
	<div class = "text-center mb-3"> 
  <h4> Already registered? </h4>
			<a href="landlord-login.php">
 	<input type="submit" name = "submit" value = "Sign in">
		</a>
		</div>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</body>
</html>