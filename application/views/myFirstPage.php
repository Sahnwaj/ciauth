<!DOCTYPE html>
<html>
<head>
	<title>User Admission</title>
</head>
<body>
<?php
echo '<h2>Welcome-  '.$this->session->userdata('Name').'</h2>';
?>
<div class="container">
	<div class="row">
<div>

<?php echo '<label><a href=" '.base_url().'userprofile/addusers">Add User Profile</a></label>'; ?>

</div>
<br><br>
<div>
<?php echo '<label><a href=" '.base_url().'userprofile/fetch">User Profile View</a></label>'; ?>

</div>
<br><br>
<div>
<?php echo '<label><a href=" '.base_url().'registration/edituser">Edit User Profile</a></label>'; ?>

</div>
</div>
</div>
<div class="container">
	<div class="row">
		
	</div>
</div>


</body>
</html>
<style type="text/css">
	.container{

  padding: 30px;  
 	box-sizing: border-box;
 	border-style:;
  position: center;
 
}
	body{
background-image: url(<?=base_url()?>/assests/images/mypic.jpg);
background-color: green;
background-repeat: no-repeat;
background-size: cover;
}



</style>