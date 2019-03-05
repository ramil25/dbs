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
	<div class="container-fluid">
	<div class="row">

		<div class="col-lg-12 col-md-12" >

<center>
<span><img src="img/lspu.png" width="120" height="120"></span>
</center>
	</div>
<div class="col-lg-1 col-md-1" >


	</div>

			<div class="col-lg-10 col-md-10 col-sm-12 col-xm-12">
				<div content>
					<div class="title">
						<h1>User Login</h1>
					</div>
					<div class="log">
						<?php echo $error;  ?>
						<?php echo $empty;  ?>
						<form class="form-group" method="post">
						<label class="form-inline">Username:</label>
						<input class="form-control bg-dark text-light" type="text" placeholder="Your Username" name="un" /><br><br>
						<label class="form-inline">Password:</label>
						<input class="form-control bg-dark text-light" type="password" placeholder="Your Password" name="ps"  />
						<br>
						<a style="font-size: 20px; color: red;" class=" label label-danger" href="#">Forgot Password</a>
						<br><br>
						<button type="submit" class="btn dark-primary" name="login">Login</button>
					</form>
					</div>
					</div>
				</div>
			</div>
			<div class="col-lg-1 col-md-1" >


	</div>

</body>
</html>
