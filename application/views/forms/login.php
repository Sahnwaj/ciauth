<!DOCTYPE html>
<html>
<head>
	<title>	</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assests/css/bootstrap.css">

	<link rel="stylesheet" type="text/css" href="<?=base_url()?>/assests/images"/>
</head>
<body>

<?php echo validation_errors(); ?>
<div class="container">
	<div class="row">
		<div class="col-lg-6">
			<h1>Login Here</h1>
			<form action="validation.php" method="post">
				<div class="form-group">
					<label>Username</label>
					<input type="text" name="username" class="form-control">
				</div>
				<div class="form-group">
					<label>Password</label>
					<input type="Password" name="password" class="form-control">
				</div>
				<button type="submit" class="btn btn-primary">Login</button>
			</form>

		</div> 
	
		<div class="col-lg-6">
			<h1>Register Here</h1>
			<form action="signup" method="post">

				<div class="form-group">
					<label>Username</label>
					<input type="text" name="username" class="form-control">
				</div>
				<div class="form-group">
					<label>Password</label>
					<input type="Password" name="password" class="form-control">
				</div>
				<button  type="submit" class="btn btn-primary">Register</button>
			</form>

		</div> 
	</div>


</div>


</body>
</html>

<style type="text/css">
	
.container{

  padding: 60px;  

  border-style: groove; 
  
}

	body{
background-image: url(<?=base_url()?>/assests/images/mypic.JPG);
background-color: green;
background-size: cover;
}
</style>