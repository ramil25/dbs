<?php
$empty = '';
$error ='';
require 'db.php';
if($conn)
{
	if(isset($_POST['login']))
	{
		$un =$_POST['un'];
		$ps =$_POST['ps'];
	$sql="SELECT * FROM users WHERE user_name='".$un."' and user_password='".$ps."'";
	$result =mysqli_query($conn,$sql);
	$row=mysqli_fetch_assoc($result);
	if (empty($un) || empty($ps))
	{
		$empty .= '<p style="margin-top:-40px;text-align:center;color:#e60000;font-weight:bold;font-size: 17px;text-transform: uppercase;">please fill the required fields</p>';
	}
	else if($row)
	{
			if($row['user_level']==1)
			{
				header("location: admin/");
			}
			else if($row['user_level']==2)
			{
				header("location: student/");
			}
	}
	else if (!$row)
	{
		$error .= '<p style="margin-top:-40px;text-align:center;color:#e60000;font-weight:bold;font-size: 17px;text-transform: uppercase;">Wrong username or password</p>';
	}
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link href="bootstrap-4.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/logins.css">
	<link rel="icon" href="img/lspu.png">
</head>
<body>
	<div class="container">
	<div class="row">
			<div class="col-lg-2 col-md-2 col-sm-12">
				<div class="lspu-logo">
			<img src="img/lspu.png" width="150" height="150" class="img-fluid">
		</div>
			</div>

			<div class="col-lg-8 col-md-8 col-sm-12">
				<div content>
					<div class="title">
						<h1>User Login</h1>
					</div>
					<div class="log">
						<?php echo $error;  ?>
						<?php echo $empty;  ?>
						<form method="post">
						<label>Username:</label>
						<input type="text" placeholder="Your Username" name="un" /><br><br>
						<label>Password:</label>
						<input type="password" placeholder="Your Password" name="ps"  />
						<br><br>
						<button type="submit" class="btn dark-primary" name="login">Login</button>
					</form>
					</div>
					</div>
				</div>
			</div>
			<div class="col-lg-2 col-md-2 col-sm-12" >


	</div>

</body>
</html>
