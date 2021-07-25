<?php
	session_start();
	include("includes/header.php")
?>
<?php
	require("database/db.php");
	$error = "";
	if(isset($_POST['login'])){
		$user_email=$_POST['email'];
		$user_password=$_POST['password'];

		$select = "select * from users_db where user_email = '$user_email' and user_password = '$user_password'";
		$run=$conn->query($select);
		if($run->num_rows>0){
			while ($row=$run->fetch_array()) {
				$_SESSION['user_name']=$user_name=$row['user_name'];
				$_SESSION['user_email']=$user_email=$row['user_email'];
				echo"<script>window.location.href='welcome.php'</script>";

			}
		}
		else{
			$error = "<span>Invalid Input";
		}
	}
?>
<body>
<br>
<hr>
	<div class="container">
		<div class="row">
			<div class="col-sm-8 col-sm-offset-2 bg-info" style="box-shadow: 2px 2px 2px 2px gray;">
				<h5 class="text text-center text-danger"><?php
					if($error!= ""){
						echo $error;
					}
				?></h5>

				<form method="post">
				<h3 class="text text-center bg-primary alert" style="color:white; font-weight: bold;">User Login Area</h3>
					<div class="form-group">
						<label for="exampleInputEmail">Email</label>
						<input type="email" name="email" class="form-control" id="exampleInputEmail" placeholder="Enter Email" required>
					</div>
					
					<div class="form-group">
						<label for="password">Password</label>
						<input type="password" name="password" class="form-control" placeholder="Enter Password" required>
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-success btn-block" name="login">Log IN</button>
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