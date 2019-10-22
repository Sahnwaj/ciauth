<!DOCTYPE html>
<html>
<head>
	<title>Add Users</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assests/css/bootstrap.css">
</head>
<body>
<h2>Add User</h2>
<form action="userprofile"  method="post">
	<div class="container">
		<div  class="row">
			<div class="col-lg-6">
				<div>
					First Name: <input type="text" name="first_name" class="form-control">
				</div><br>
				<div>
					Last Name: <input type="text" name="last_name" class="form-control">
				</div><br>
				<div>
					Father Name: <input type="text" name="father_name" class="form-control">
				</div><br>
				<div>
					Email: <input type="text" name="email" class="form-control">
				</div><br>
				<div>
					Mobile: <input type="text" name="mobile" class="form-control">
				</div><br>
				<div>
					Country: <input type="text" name="country" class="form-control">
				</div><br>
				
				<table>
					<tr>
						<td><input type="file" name="image" value=" " /></td>
						<td><button  type="submit" class="btn btn-primary">Add User</button></td>
					</tr>

				</table>

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