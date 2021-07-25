<?php
session_start();
include("includes/loginheader.php");
if(!$_SESSION['user_email']){
	header("location:login.php");
}
?>
<br>
<div class="container">
	<div class="row">
		<div class="col-sm-6">
			<h4 class="text text-center text-info alert bg-primary">How to caste Your Vote<b><i>?</i></b></h4>
			<ul>
			<li>
				firstly select <b>ID Generate</	b> from Navigation bar
			</li>
			<br>
			<li>
				Then send request to <b>Admin</b> for Generate Your ID
			</li>	
			<br>
			<li> 
				Click on the <b>Election</b> from navigation bar 
			</li>
			<br>
			<li>
				Select available election 
			</li>
			<br>
			<li>
				The secery of ballot sysytem maintained under the high security standards 
			</li>
			</ul>	
		</div>
		<br>
		<div class="col-sm-6">
			<img src="image/home_2.jpg" class="img img-responsive img-thumbnail">
		</div>
	</div>
</div>
<?php
include("includes/footer.php")
?>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/jquery.js"></script>