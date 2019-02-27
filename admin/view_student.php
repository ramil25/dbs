<?php
$conn = mysqli_connect('localhost','root','','databank');
if($conn)
{
$sql ="SELECT * from students";
$res =mysqli_query($conn,$sql);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Update Student Profile</title>
  <link rel="stylesheet" href="../css/bootstrap.css">
  <link rel="stylesheet"  href="../css/upd-css/designs.css">
  <link rel="icon" href="../img/lspu.png">
	<title>View Students</title>
</head>
<body>
<div class="csidebar">
          <br><br>

        </div>
<div class="container">
	<div class="row">
		<div class="col-md-12">
        <nav>
			<div class="nav-center">
  			<span><img style="display: block;" src="../img/lspu.png" height="100" width="100" /></span>
  				<span><div class="left-float"><h1>Laguna State Polytechnic University</h1>
  				<h2>Siniloan (Host) Campus</h2></div></span>
  				</div>
  				</nav>
  			    	<h1 style="margin-top: 14%; font-size: 55px; font-weight: bold; font-family: calibri;" class="text-center">VIEW ALL</h1><br>
<div class="back-css">
          <a href="javascript:history.go(-1)" class="btn btn-success">Back</a>
        </div>
        <div class="search-bar" style="margin-left: 10%;">
          <input type="text" name="search" class="form-control" placeholder="Search...">
        </div>
        	 <table style="margin-top: 20px; border-color: black; background-color: white; color: black;" class="table">
        	 		 		<?php 
        	while($row=mysqli_fetch_assoc($res))
			{ ?>
				<tr>
					<td><a style="color: black; font-size: 20px;" href="view_student.php?"><?php echo $row['full_name']; ?></a></td>
				</tr>
			<?php } ?>
             	 </table>
  				</div>

  			</div>
  		</div>
  	

</body>
</html>
<?php } ?>