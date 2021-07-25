<?php
session_start();
include("includes/loginheader.php");
if(!$_SESSION['user_id_generated']){
	header("location:elections.php");
exit();
}
?>
<br>
<div class="container">
	<div class="col-md-6 col-md-offset-3">
		<form method="POST">
			<?php
				require("database/db.php");
				$elections_name=$_GET['elections_name'];
				$elections_name=str_replace('-',' ',$elections_name);
				?>
				<div class="form-group">
					<input type="text" value="<?php echo $elections_name;?>" class="form-control" readonly />
				</div>
				<?php
				$select = "select * from candidates_tbl where elections_name='$elections_name'";
				$run = $conn->query($select);
				if($run->num_rows>0){
					while($row=$run->fetch_array()){
						?>
						<div class="form-group">
							<input type="radio" name="candidates_name" class="list-group" value="<?php echo $row['candidates_name'];?>">
							<label><?php echo $row['candidates_name'];?></label>
						</div>
						<?php
					}
				}
			?>
			<input type="submit" name="vote_caste" class="btn btn-success" value="Vote">
		</form>
		
	</div>
</div>
<?php
if(isset($_POST['vote_caste'])){
	$candidates_name=$_POST['candidates_name'];
	$user_email = $_SESSION['user_email'];
	$select="select * from results_tbl where user_email='$user_email' and elections_name='$elections_name'";
	$exe1=$conn->query($select);
	if($exe1->num_rows>0){
		echo "<script>alert('You have already casted the vote!')</script>";
		//echo "You have already casted the vote";
	}
	else{
	$insert = "insert into results_tbl (user_email,candidates_name,elections_name) values ('$user_email','$candidates_name','$elections_name')";
	$run=$conn->query($insert);
	if($run){
		$update = "update candidates_tbl set total_votes=`total_votes`+'1' where candidates_name='$candidates_name' and elections_name = '$elections_name'";
		$exe=$conn->query($update);
		if($exe){
			echo "<script>alert('Successfully voted')</script>";
			header("location:results.php");
			//echo "Successfully voted";
		}
		else{
			echo "<script>alert('Seem's some error')</script>";
			//echo "Seem's some error";
		}
	}
	else{
		echo "<script>alert('error')</script>";
		//echo "error";
	}
	}

}
?>




<br>
<?php
include("includes/footer.php")
?>
 


<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/jquery.js"></script>

