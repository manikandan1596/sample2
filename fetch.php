<?php
	include('db/conn.php');
	if(isset($_POST['fetch'])){
		?>
		<table class="table table-striped table-bordered table-hover">
			<thead>
				<th>USER</th>
				<th>DOB</th>
				<th>ADDRESS</th>
				<th>QUALIFICATION</th>
				<th>DESIGNATION</th>
				<th>Action</th>
			</thead>
			<tbody>
			<?php
				$query=$conn->query("SELECT * FROM user");
				while($row=$query->fetch_array()){
					?>
					<tr>
						<td><span id="user<?php echo $row['id']; ?>"><?php echo $row['user']; ?></span></td>
						<td><span id="dob<?php echo $row['id']; ?>"><?php echo $row['dob']; ?></span></td>
						<td><span id="address<?php echo $row['id']; ?>"><?php echo $row['address']; ?></span></td>
						<td><span id="qual<?php echo $row['id']; ?>"><?php echo $row['qual']; ?></span></td>
						<td><span id="design<?php echo $row['id']; ?>"><?php echo $row['design']; ?></span></td>
						<td>
							<a style="cursor:pointer;" class="btn btn-warning edit" data-id="<?php echo $row['id']; ?>"><span class="glyphicon glyphicon-edit"></span> Edit</a> || 
							<a style="cursor:pointer;" class="btn btn-danger delete" data-id="<?php echo $row['id']; ?>"><span class="glyphicon glyphicon-trash"></span> Delete</a>
						</td>
					</tr>
					<?php
				}
			
			?>
			</tbody>
		</table>
		<?php
	}
?>


