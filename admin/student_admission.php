<?php



?>
<!DOCTYPE html>
<html>
<head>
	<title>Manage Student</title>
	<link rel="stylesheet" href="../css/bootstrap.css">
	<link rel="stylesheet"  href="../css/upd-css/designs(2).css">
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

			</div>
		</div>
		</div>
        <div class="back-css">
          <a href="javascript:history.go(-1)" class="btn btn-success">Back</a>
        </div>
        <div class="search-bar">
          <input type="text" name="search" class="form-control" placeholder="Search...">
        </div>
        <p class="std-title">STUDENT ADMISSION</p>
          <div class="std-admission-1">
            <a href="add_student.php">
            <button type="submit" name="student-account" class="btn btn-success" style="margin-bottom: 30px;margin-left:50px;">Add Student</button></a>
          </div>
          <div class="std-admission-2">
            <button type="submit" name="manage-student-request" class="btn btn-success" style="margin-left: 140px;">Update Student</button>
          </div>
          <div class="std-admission-3">
            <button onclick="location.href='view_student.php?title=VIEW ALL'" type="submit" name="manage-student-request" class="btn btn-success" style="margin-left: 140px;">View All</button>
          </div>
</body>
</html>
<script src="../js/bootstrap.js">

</script>
