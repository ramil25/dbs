
<?php
$year=$_GET['year'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Semester Menu</title>
	<link rel="stylesheet" href="../css/bootstrap.css">
	<link rel="stylesheet"  href="../css/design.css">
	<link rel="icon" href="../img/lspu.png">
</head>
<body>
		<div class="row">
			<div class="col-md-2 col-lg-2 ">
				<div class="csidebar">
					<br><br>

				</div>
			</div>
			<div class="col-md-10 col-lg-10">
				<nav>
					<div class="nav-center">
  				<span><img src="../img/lspu.png" height="100" width="100" /></span>
  				<span><div class="left-float"><h1>Laguna State Polytechnic University</h1>
  				<h2>Siniloan (Host) Campus</h2></div></span>
  				</div>
  				</nav>
  				<!--Yerly Button-->
  				<div class="year-menu">
            <h1 class="text-center"><?php echo $year;  ?> ENROLEES CHART</h1><br>
            <ul>
            	<li><button type="submit" class="btn btn-success btn-lg" href="">1st Semester</button></li>
            	<li><button type="submit" class="btn btn-success btn-lg" href="">2nd Semester</button></li>
            </ul>
          </div>
			</div>
		</div>
		</div>
        <div class="back-css">
          <a href="year_menu.php" class="btn btn-success" >Back</a>
        </div>

</body>
</html>
<script src="../js/bootstrap.js">

</script>
