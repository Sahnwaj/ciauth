<!DOCTYPE html>
<html>
<head>
	<title>Ericsson Login</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assests/css/bootstrap.css">

	<link rel="stylesheet" type="text/css" href="<?=base_url()?>/assests/images"/>
</head>
<body>
<h2 align="center" 	>BBD Page</h2>
<?php //echo validation_errors(); ?>
<div class="container">
	<div class="row">
		<div class="col-lg-6">
			<h1>Login Here</h1>
			<form action="logincheck" method="post">
				<div class="form-group">
					<label>Username</label>
					<input type="text" name="username" class="form-control">
					<span class="text-danger"><?php echo form_error('username'); ?></span>
				</div>
				<div class="form-group">
					<label>Password</label>
					<input type="Password" name="password" class="form-control">
					<span class="text-danger"><?php echo form_error('password'); ?></span>
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
					<span class="text-danger"><?php echo form_error('username'); ?></span>
				</div>
				<div class="form-group">
					<label>Password</label>
					<input type="Password" name="password" class="form-control">
					<span class="text-danger"><?php echo form_error('password'); ?></span>
				</div>
				<button  type="submit" class="btn btn-primary">Register</button>
				<?php 
				//echo //$this->session->flashdata("error");
				?>
			</form>

		</div> 
	</div>


</div>


</body>
</html>

<style type="text/css">
	
.container{

  padding: 30px;  
 	box-sizing: border-box;
 	border-style: groove; 
  position: center;
 
}
	body{
background-image: url(<?=base_url()?>/assests/images/bgrnd.jpg);
background-color: green;
background-repeat: no-repeat;
background-size: 1500px 700px;
}
h2{
	color: blue;
}
</style>