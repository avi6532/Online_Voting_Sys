<?php
session_start();
include("includes/loginheader.php");
if(!$_SESSION['user_email']){
	header("location:login.php");
}
?>
<br>
<div class="container">
	<?php
	require("database/db.php");
	$user_email=$_SESSION['user_email'];
	$select="select * from id_request_tbl where user_email='$user_email'";
		$run=$conn->query($select);
		if($run->num_rows>0){
			?>
			<div class="col-sm-7 col-sm-offset-3 bg-success alert">
			<h4>Your Request Already Submitted Please wait..</h4>
			</div>
			<?php
		}
		else{

			?>
			<?php
			$select = "select*from users_db where user_email='$user_email'";
	$run=$conn->query($select);
	if($run->num_rows>0){
		while ($row=$run->fetch_array()) {
			$user_name=$row['user_name'];
			$user_email=$row['user_email'];
			$user_state=$row['user_state'];
			$user_voter_id=$row['user_voter_id'];
			$user_id_generated=$row['user_id_generated'];
		}
	}
	if ($user_id_generated!="") {
	?>
		<div class="col-sm-6 col-sm-offset-3 bg-success alert">
			<h4>Your ID is "<span class="text text-danger text-center"><b><u><?php echo $user_id_generated; ?></u></b></span>"</h4>
			<h4>Your Password  is "<span class="text text-danger text-center"><b><u>Same as the one you entered at the time of registration </u></b></span>" </h4>
			
		</div>

	<?php
	}
	else{
		?>
		<div  class="col-sm-7 col-sm-offset-3 bg-success alert">
		<form method="post">
					<h3 class="text text-center bg-primary alert" style="color:white; font-weight: bold;">User ID Generator</h3>
						<div class="form-group">
							<label for="exampleInputEmail">User Name</label>
							<input type="email" name="user_name" class="form-control"  placeholder="Enter User Name " required
							value="<?php echo $user_name; ?>" readonly>
						</div>
						<div class="form-group">
							<label for="exampleInputEmail">Email</label>
							<input type="email" name="user_email" class="form-control"  placeholder="Enter Email" required
							value="<?php echo $user_email; ?>" readonly>
						</div>
						<div class="form-group">
							<label for="exampleInputEmail">State</label>
							<input type="email" name="user_state" class="form-control"  placeholder="Enter State" required
							value="<?php echo $user_state; ?>" readonly>
						</div>
						<div class="form-group">
							<label for="exampleInputEmail">Voter ID</label>
							<input type="email" name="user_voter_id" class="form-control"  placeholder="Enter Voter ID" maxlength="10" required value="<?php echo $user_voter_id; ?>" readonly>
						</div>
						
						<div class="form-group">
							<button type="submit" class="btn btn-info btn-block" name="idrequest">ID Request</button>
						</div>
		</form>
	</div>
</div>
		
	
<?php
}	
} 
?>			
<?php
	if(isset($_POST['idrequest'])){
		$user_name=$_POST['user_name'];
		$user_email=$_POST['user_email'];
		$user_voter_id=$_POST['user_voter_id'];
		$user_state=$_POST['user_state'];
		require("database/db.php");
		
			$insert="insert into id_request_tbl (user_name,user_email,user_voter_id,user_state) value('$user_name','$user_email','$user_voter_id','$user_state')";
		$run=$conn->query($insert);
		if ($run) {
			echo "<script>alert('Your Request Already Submitted Please wait..')</script>";
			header("location:idgenerate.php");
		}
		else{
			echo "fail";
		} 
		
	}
	
?>

<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/jquery.js"></script>

