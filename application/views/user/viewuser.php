<!DOCTYPE html>
<html>
<head>
	<title>Add Users</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assests/css/bootstrap.css">
</head>
<body>
<h2>User:</h2>
<form>
	<div class="container">
		<div  class="row">
			<div class="col-lg-6">
				<div>
					First Name: <label type="text" name="first_name" class="form-control"></label> 
				</div><br>
				<div>
					Last Name: <label type="text" name="last_name" class="form-control"></label> 
				</div><br>
				<div>
					Father Name: <label type="text" name="father_name" class="form-control"></label>
				</div><br>
				<div>
					Email: <label type="text" name="email" class="form-control"></label>
				</div><br>
				<div>
					Mobile: <label type="text" name="mobile" class="form-control"></label>
				</div><br>
				<div>
					Country: <label type="text" name="country" class="form-control"></label>
				</div><br>
				

			</div>
		
		
	
			<div class="col-lg-6">
				<img src="<?=base_url()?>/assests/images/EGIL43804.jpg">
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
img{
	margin-left: 400px;
}


</style>