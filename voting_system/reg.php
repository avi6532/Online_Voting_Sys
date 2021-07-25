<?php
	include("includes/header.php")
?>
<?php
	require("database/db.php");
	$emailError = "";
	$accountSuccess = "";
	if(isset($_POST['register'])){
		$user_name=$_POST['fullname'];
		$user_email=$_POST['email'];
		$user_voter_id=$_POST['voterid'];
		$user_gender=$_POST['gender'];
		$user_state=$_POST['state'];
		$user_password=$_POST['password'];

		$select = "select * from users_db where user_email = '$user_email'";
		$exe=$conn->query($select);
		if($exe -> num_rows > 0){
			echo "<script>alert('Email Id Already Exist')</script>";
			/*$emailError = "<p class='text text-center text-danger'>Email ID already exist</p>"*/ 
		}
		else{
			$insert = "insert into users_db(user_name,user_email,user_voter_id,user_gender,user_state,user_password) values('$user_name','$user_email','$user_voter_id','$user_gender','$user_state','$user_password')";
			$run = $conn->query($insert);
			if($run){
				echo "<script>alert('Account Successfully created')</script>";
				echo "<script>window.location.href='login.php'</script>";
			}
			else{
				echo "fail to Register";
			}
		}
		
	}
?>
<body>
<br>
<hr>
	<div class="container">
		<div class="row">
			<div class="col-sm-8 col-sm-offset-2 bg-info" style="box-shadow: 2px 2px 2px 2px gray;">
				<?php
					if($emailError!= ""){
						echo $emailError;
					}
					if($accountSuccess!=""){
						echo $accountSuccess;
					}
				?>
				<form method="post">
				<h3 class="text text-center bg-primary alert" style="color:white; font-weight: bold;">User Registration</h3>
					<div class="form-group">
						<label for="Username">Full Name</label>
						<input type="text" name="fullname" class="form-control" required>
					</div>
					<div class="form-group">
						<label for="exampleInputEmail">Email</label>
						<input type="email" name="email" class="form-control" id="exampleInputEmail" required>
					</div>
					<div class="form-group">
						<label for="voterid">Voter ID</label>
						<input type="text" name="voterid" class="form-control" maxlength="10" required>
					</div>
					<div class="form-group">
						<label for="Gender">Gender</label>
						<select name="gender" class="form-control" required>
							<option value="">Select</option>
							<option value="Male">Male</option>
							<option value="Female">Female</option>
						</select>
					</div>
					<div class="form-group">
						<label for="state">State</label>
						<select name="state" class="form-control" required>
							<option value="">Select</option>
							<option value="andhra_pradesh">Andhra Pradesh</option>
							<option value="arunachal_pradesh">Arunachal Pradesh</option>
							<option value="assam">Assam</option>
							<option value="bihar">Bihar</option>
							<option value="chhattisgarh">Chhattisgarh</option>
							<option value="goa">Goa</option>
							<option value="gujarat">Gujarat</option>
							<option value="haryana">Haryana</option>
							<option value="himachal_pradesh">Himachal Pradesh</option>
							<option value="jharkhand">Jharkhand</option>
							<option value="karnataka">Karnataka</option>
							<option value="kerala">Kerala</option>
							<option value="madhya_pradesh">Madhya Pradesh</option>
							<option value="maharashtra">Maharashtra</option>
							<option value="manipur">Manipur</option>
							<option value="meghalaya">Meghalaya</option>
							<option value="mizoram">Mizoram</option>
							<option value="nagaland">Nagaland</option>
							<option value="odisha">Odisha</option>
							<option value="punjab">Punjab</option>
							<option value="rajasthan">Rajasthan</option>
							<option value="sikkim">Sikkim</option>
							<option value="tamil_nadu">Tamil Nadu</option>
							<option value="telangana">Telangana</option>
							<option value="tripura">Tripura</option>
							<option value="uttar_pradesh">Uttar Pradesh</option>
							<option value="uttarakhand">Uttarakhand</option>
							<option value="west_bengal">West Bengal</option>
						</select>
					</div>
					<div class="form-group">
						<label for="password">Password</label>
						<input type="password" name="password" class="form-control" required>
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-success btn-block" name="register">Submit</button>
					</div>
				</form>
			</div>
		</div>
	</div>
<script type="text/javascript" src="js/bootstrap.js">
<script type="text/javascript" src="js/jquery.js">
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js">
</script>

</body>
</html>