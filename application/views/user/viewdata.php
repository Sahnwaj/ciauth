<div >
<table>
	<tr>
		<th>First Name</th>
		<th>Last Name</th>
		<th>Father Name</th>
		<th>Email</th>
		<th>Mobile Number</th>
		<th>Country</th>
		<th>User Image</th>
	</tr>	

	<?php  
	if($fetch_data->num_rows() > 0){
		foreach($fetch_data->result() as $row) {
	?>
		<tr>
			<td><?php echo $row->first_name; ?></td>
			<td><?php echo $row->last_name; ?></td>
			<td><?php echo $row->father_name; ?></td>
			<td><?php echo $row->email; ?></td>
			<td><?php echo $row->mobile; ?></td>
			<td><?php echo $row->country; ?></td>
			<td><?php echo $row->userimage; ?></td>
		</tr>

	<?php
		}
	}
	else{

	?>
		<tr>
			<td colspan="3" >No data found</td>

		</tr>
	<?php
	}

	?>
</table>
</div> 
