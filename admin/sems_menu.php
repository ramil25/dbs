
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
            	<li><?php echo '<a href="chart.php?year='.$year.'&sem=1st Semester" type="submit" class="btn btn-success btn-lg">1st Semester</a>'; ?></li>
            	<li><?php echo '<a href="chart.php?year='.$year.'&sem=2nd Semester" type="submit" class="btn btn-success btn-lg">2nd Semester</a>'; ?></li>
            </ul>
          </div>
			</div>
		</div>
		</div>
        <div class="back-css">
          <a href="javascript:history.go(-1)" class="btn btn-success">Back</a>
        </div>

</body>
</html>
<script src="../js/bootstrap.js">

</script>

