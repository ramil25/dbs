<?php

?>
<!DOCTYPE html>
<html>
<head>
  <title>Add Student</title>
  <link rel="stylesheet" href="../css/bootstrap.css">
  <link rel="stylesheet"  href="../css/upd-css/designs.css">
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
    </div>
    </div>
    <div class="back-css">
      <a href="index.php" class="btn btn-success">Home</a>
    </div>
    <!-- Update input  -->
      <div class="upd-student">
        <form  action="" method="post" >
          <label>Name: </label>
          <input type="text" name="name" placeholder="Full Name"><br>
          <label>Gender: </label>
          <input type="text" name="usn" placeholder="Gender"><br>
          <label>Last School Attended: </label>
          <input type="text" name="current-pwd" placeholder="School Name"><br>
          <label>Strand / Course: </label>
          <input type="text" name="new-pwd" placeholder="Enter Student Strand" ><br>
          <label>GWA: </label>
          <input type="text" name="confirm-new-pwd" placeholder="Grade"><br>
          <label>Math: </label>
          <input type="text" name="confirm-new-pwd" placeholder="Grade"><br>
          <label>English: </label>
          <input type="text" name="confirm-new-pwd" placeholder="Grade"><br>
          <label>Science: </label>
          <input type="text" name="confirm-new-pwd" placeholder="Grade"><br>
        </div>
        <div class="upd-student-2">
          <label>1st Choice: </label>
          <input type="text" name="confirm-new-pwd" placeholder="Course"><br>
          <label>2nd Choice: </label>
          <input type="text" name="confirm-new-pwd" placeholder="Course"><br>
          <label>3rd Choice: </label>
          <input type="text" name="confirm-new-pwd" placeholder="Course"><br>
          <label>Raw Score: </label>
          <input type="text" name="confirm-new-pwd" placeholder="Input Score"><br>
          <label>Remarks: </label>
          <input type="text" name="confirm-new-pwd" placeholder="Remarks Here"><br>
          <label>Date: </label>
          <input type="date" name="confirm-new-pwd" placeholder="Course"><br><label>Upload File: </label>
          <input type="file" name="confirm-new-pwd" placeholder="Course"><br>
        </div>
        <!-- update-btn  -->
        <div class="upd-btn">
          <button type="submit" name="upd-btn" class="btn btn-success">Create</button>
        </div>
        </form>
</body>
</html>
<script src="../js/bootstrap.js">

</script>
