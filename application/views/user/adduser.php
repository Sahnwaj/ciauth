<!DOCTYPE html>
<html>
<head>
	<title>Add Users</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assests/css/bootstrap.css">
</head>
<body>
<h2>Add User</h2>
<form action="do_upload"  method="post"  enctype="multipart/form-data">
	<div class="container">
		<div  class="row">
			<div class="col-lg-6">

				<div>
					First Name: <input type="text" name="first_name" class="form-control">
					<span class="text-danger"><?php echo form_error('first_name'); ?></span>
				</div><br>
				<div>
					Last Name: <input type="text" name="last_name" class="form-control">
					<span class="text-danger"><?php echo form_error('last_name'); ?></span>
				</div><br>
				<div>
					Father Name: <input type="text" name="father_name" class="form-control">
					<span class="text-danger"><?php echo form_error('father_name'); ?></span>
				</div><br>
				<div>
					Email: <input type="text" name="email" class="form-control"  >
					<span class="text-danger"><?php echo form_error('email'); ?></span>
				</div><br>
				<div>
					Mobile: <input type="text" name="mobile" class="form-control">
					<span class="text-danger"><?php echo form_error('mobile'); ?></span>
				</div><br>
				<div>
					Country: <input type="text" name="country" class="form-control">
					<span class="text-danger"><?php echo form_error('country'); ?></span>
				</div><br>
				
				<input type="file" name="userimage" size="20" />
				<span class="text-danger"><?php echo form_error('userimage'); ?></span>

				<br /><br />
						
				<button  type="submit" class="btn btn-primary">Add User</button>

			</div>
		</div>
		
	</div>
</form>
</body>
</html>

<style type="text/css">
	
.container{

  padding: 30px;  
 	box-sizing: border-box;
 	 
  position: center;
 
}

</style>

  


