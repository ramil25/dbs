<?php
$ym =$_GET['category'];

?>
<!DOCTYPE html>
<html>
<head>
	<title>Yearly Enrolled</title>
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
            <h1 class="text-center"><?php echo $ym ;  ?></h1><br>
            <ul>
            	<li><a class="btn btn-success btn-lg" href="sems_menu.php?year=2016">2016</a></li>
            	<li><a class="btn btn-success btn-lg" href="sems_menu.php?year=2017">2017</a></li>
            	<li><a class="btn btn-success btn-lg" href="sems_menu.php?year=2018">2018</a></li>
            	<li><a class="btn btn-success btn-lg" href="sems_menu.php?year=2019">2019</a></li>
            </ul>
          </div>
			</div>
		</div>
		</div>
        <div class="back-css">
          <a href="index.php" class="btn btn-success" >Home</a>
        </div>

</body>
</html>
<script src="../js/bootstrap.js">

</script>
