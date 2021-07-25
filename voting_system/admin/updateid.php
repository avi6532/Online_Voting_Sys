<!DOCTYPE html>
<html>
<head>
<title>Update ID Reuest</title>
<link rel="stylesheet" href="css/bootstrap.css"/>
<link rel="stylesheet" href="mystyle.css"/>
<link rel="stylesheet"href="css/fonts.css"/>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/jquery.js"></script>
</head>
<body>
	<div class="container">
		<div class="col-sm-6">
			<?php
				$prefix="";
				$postfix="";
				$id_generated="";
				$conn = new mysqli("localhost","root","","voting_system_db");
				$id=$_GET['id'];
				$select ="select * from id_request_tbl where id='$id'";
				$run=$conn->query($select);
				if($run->num_rows>0){
					while($row=$run->fetch_array()){
						$user_name=$row['user_name'];
						$user_email=$row['user_email'];
						$user_voter_id=$row['user_voter_id'];
						$user_state=$row['user_state'];
				}
						switch ($user_state) {
							case 'andhra_pradesh':
								$prefix="anpr";
								$rand=rand(99999,11111);
								$postfix="%Z&";
								$id_generated=$prefix.$rand.$postfix;
								break;
								case 'arunachal_pradesh':
								$prefix="arpr";
								$rand=rand(99999,11111);
								$postfix="#@$";
								$id_generated=$prefix.$rand.$postfix;
								break;
								case 'assam':
								$prefix="assa";
								$rand=rand(99999,11111);
								$postfix="*&%";
								$id_generated=$prefix.$rand.$postfix;
								break;
								case 'bihar':
								$prefix="biha";
								$rand=rand(99999,11111);
								$postfix="*$%";
								$id_generated=$prefix.$rand.$postfix;
								break;
								case 'chhattisgarh':
								$prefix="chha";
								$rand=rand(99999,11111);
								$postfix="*^%";
								$id_generated=$prefix.$rand.$postfix;
								break;
								case 'goa':
								$prefix="goaa";
								$rand=rand(99999,11111);
								$postfix="(!^";
								$id_generated=$prefix.$rand.$postfix;
								break;
								case 'gujarat':
								$prefix="guja";
								$rand=rand(99999,11111);
								$postfix="(&#";
								$id_generated=$prefix.$rand.$postfix;
								break;
								case 'haryana':
								$prefix="hary";
								$rand=rand(99999,11111);
								$postfix="*^#";
								$id_generated=$prefix.$rand.$postfix;
								break;
								case 'himachal_pradesh':
								$prefix="hipr";
								$rand=rand(99999,11111);
								$postfix="&^$";
								$id_generated=$prefix.$rand.$postfix;
								break;
								case 'jharkhand':
								$prefix="jhar";
								$rand=rand(99999,11111);
								$postfix=")&@";
								$id_generated=$prefix.$rand.$postfix;
								break;
								case 'karnataka':
								$prefix="karn";
								$rand=rand(99999,11111);
								$postfix=")&^";
								$id_generated=$prefix.$rand.$postfix;
								break;
								case 'kerala':
								$prefix="kera";
								$rand=rand(99999,11111);
								$postfix="*$@";
								$id_generated=$prefix.$rand.$postfix;
								break;
								case 'madhya_pradesh':
								$prefix="mapr";
								$rand=rand(99999,11111);
								$postfix="($*";
								$id_generated=$prefix.$rand.$postfix;
								break;
								case 'maharashtra':
								$prefix="maha";
								$rand=rand(99999,11111);
								$postfix="#&%";
								$id_generated=$prefix.$rand.$postfix;
								break;
								case 'manipur':
								$prefix="mani";
								$rand=rand(99999,11111);
								$postfix="*$&";
								$id_generated=$prefix.$rand.$postfix;
								break;
								case 'meghalaya':
								$prefix="megh";
								$rand=rand(99999,11111);
								$postfix="*%!";
								$id_generated=$prefix.$rand.$postfix;
								break;
								case 'mizoram':
								$prefix="mizo";
								$rand=rand(99999,11111);
								$postfix="^#(";
								$id_generated=$prefix.$rand.$postfix;
								break;
								case 'nagaland':
								$prefix="naga";
								$rand=rand(99999,11111);
								$postfix="!&@";
								$id_generated=$prefix.$rand.$postfix;
								break;
								case 'odisha':
								$prefix="odis";
								$rand=rand(99999,11111);
								$postfix="(&!";
								$id_generated=$prefix.$rand.$postfix;
								break;
								case 'assam':
								$prefix="assa";
								$rand=rand(99999,11111);
								$postfix="*&%";
								$id_generated=$prefix.$rand.$postfix;
								break;
								case 'punjab':
								$prefix="punj";
								$rand=rand(99999,11111);
								$postfix="&!^";
								$id_generated=$prefix.$rand.$postfix;
								break;
								case 'rajasthan':
								$prefix="raja";
								$rand=rand(99999,11111);
								$postfix="^!)";
								$id_generated=$prefix.$rand.$postfix;
								break;
								case 'sikkim':
								$prefix="sikk";
								$rand=rand(99999,11111);
								$postfix="&!$";
								$id_generated=$prefix.$rand.$postfix;
								break;
								case 'tamil_nadu':
								$prefix="tana";
								$rand=rand(99999,11111);
								$postfix="&!^";
								$id_generated=$prefix.$rand.$postfix;
								break;
								case 'punjab':
								$prefix="punj";
								$rand=rand(99999,11111);
								$postfix="&!^";
								$id_generated=$prefix.$rand.$postfix;
								break;
								case 'punjab':
								$prefix="punj";
								$rand=rand(99999,11111);
								$postfix="&!^";
								$id_generated=$prefix.$rand.$postfix;
								break;
								case 'telangana':
								$prefix="tele";
								$rand=rand(99999,11111);
								$postfix="*!)";
								$id_generated=$prefix.$rand.$postfix;
								break;
								case 'tripura':
								$prefix="trip";
								$rand=rand(99999,11111);
								$postfix="&%@";
								$id_generated=$prefix.$rand.$postfix;
								break;
								case 'uttar_pradesh':
								$prefix="utpr";
								$rand=rand(99999,11111);
								$postfix="^!(";
								$id_generated=$prefix.$rand.$postfix;
								break;
								case 'west_bengal':
								$prefix="webe";
								$rand=rand(99999,11111);
								$postfix="@#$";
								$id_generated=$prefix.$rand.$postfix;
								break;
								case 'uttarakhand':
								$prefix="utta";
								$rand=rand(99999,11111);
								$postfix="&!)";
								$id_generated=$prefix.$rand.$postfix;
								break;
							
							default:
								# code...
								break;
							}
					?>
					<form method="post">
						<div class="form-group">
							<label for="exampleInputEmail">User Name</label>
							<input type="email" name="user_name" class="form-control"   required
							 value="<?php echo $user_name;?>" readonly>
						</div>
						<div class="form-group">
							<label for="exampleInputEmail">User Email</label>
							<input type="email" name="user_email" class="form-control"   required
							value="<?php echo $user_email;?>" readonly>
						</div>
						<div class="form-group">
							<label for="exampleInputEmail">User Voter_Id</label>
							<input type="email" name="user_voter_id" class="form-control"  required
							value="<?php echo $user_voter_id;?>" readonly>
						</div>
						<div class="form-group">
							<label for="exampleInputEmail">User State</label>
							<input type="email" name="user_state" class="form-control" required
							value="<?php echo $user_state;?>" readonly>
						</div>
						<div class="form-group">
							<label for="exampleInputEmail">System Generated ID</label>
							<input type="email" name="user_id_generated" class="form-control" required
							value="<?php echo $id_generated;?>" readonly>
						</div>
						<div class="form-group">
							<input type="submit" name="update" value="Update User ID" class="form-control btn btn-success">
						</div>
					</form>


					<?php

					}
					else{
						echo "Record Not found";
					}
					?>
				
			
		</div>
		<div class="col-sm-6">
			
		</div>
	</div>
</body>
</html>
<?php
if(isset($_POST['update'])){
	$user_email=$_POST['user_email'];
	$user_id_generated=$_POST['user_id_generated'];
	$update="update users_db set user_id_generated='$user_id_generated' where user_email='$user_email'";
	$run=$conn->query($update);
	if($run){
		$delete="delete from id_request_tbl where user_email='$user_email'";
		$del=$conn->query($delete);
		if($del){
			echo "<script>alert('Updated Succefully and Deleted!!')</script>";
			echo "<script>window.location.href='idrequest.php'</script>";
		}
	}
	else{
		echo "<script>alert('Some error Occureed')</script>";
	}
}

?>