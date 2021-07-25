<!DOCTYPE html>
<html>
<head>
<title>Voting System</title>
<link rel="stylesheet" href="css/bootstrap.css"/>
<link rel="stylesheet" href="mystyle.css"/>
<link rel="stylesheet"href="css/fonts.css"/>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/jquery.js"></script>
</head>
<body>
	<div class="container">
		<div class="col-sm-8">
			<h2>All Data Request</h2>
			<table class="table table-responsive table-hover">
				<tr>
					<th>#</th>
					<th>User Name</th>
					<th>User Email</th>
					<th>User Voter ID</th>
					<th>User State</th>
					<th>Action</th>
				</tr>
				<?php

					$conn = new mysqli("localhost","root","","voting_system_db");
						
					$select = "select *from id_request_tbl";
					$run=$conn->query($select);
					if($run->num_rows>0){
					$total=0;
					while($row=$run->fetch_array()){
					$total=$total+1;
					$id=$row['id'];
						?>
						<tr>
							<td><?php echo $total;?></td>
							<td><?php echo $row['user_name'];?></td>
							<td><?php echo $row['user_email'];?></td>
							<td><?php echo $row['user_voter_id'];?></td>
							<td><?php echo $row['user_state'];?></td>
							<td><a href="updateid.php?id=<?php echo $id;?>">Generate</a></td>
						</tr>

						<?php

				}
				}
				else{
					?>
						<tr>
							<td colspan="6">Record Not Found</td>
						</tr>

					<?php
				}
				?>
			</table>
			
		</div>
		
		
	</div>
</body>
</html>