<?php
$ym =$_GET['category'];
$link1 ="";
$link2 ="";
$link3 ="";
$link1 ="";
if($ym=="ENROLLEES CHART")
{
$link1 ="sems_menu.php?year=2019";
}
if($ym=="Qualifying Exam")
{
$link1 ="qualifying_exam.php?year=2019";
}
if($ym=="CLUSTER")
{
$link1 ="cluster.php?year=2019";
}
?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo $ym; ?>?</title>
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
            <h1 class="text-center"><?php echo $ym;  ?></h1><br>
            <ul>
            	<li><a class="btn btn-success btn-lg" href=<?php echo $link1; ?>>2019</a></li>
            </ul>
          </div>
			</div>
		</div>
		</div>

</body>
</html>
<script src="../js/bootstrap.js">

</script>
