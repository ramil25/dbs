<?php 
/* CSS is not fix yet */
/* CSS is not fix yet */
  if (isset($_GET['result'])) {
    echo'
   <!DOCTYPE html>
<html>
<head>
  <title>Manage Student</title>
  <link rel="stylesheet" href="../css/bootstrap.css">
  <link rel="stylesheet"  href="../css/upd-css/designs(2).css">
  <link rel="stylesheet" type="text/css" href="../fontawesome/css/all.css">
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
    </div><section>
        <form method="POST">
        <div class="search-bar">
          <div class="container">
          <input type="text" name="search" class="form-control" placeholder="Search..." name="search" required>
        </div>
        </div>
        <div class="search-container">
          <button type="submit" name="submit-search"><i class="fa fa-search"></i></button>
          </form>
        </div>';
  }
?>
<!DOCTYPE html>
<html>
<head>
  <title>Manage Student</title>
  <link rel="stylesheet" href="../css/bootstrap.css">
  <link rel="stylesheet"  href="../css/upd-css/designs(2).css">
  <link rel="stylesheet" type="text/css" href="../fontawesome/css/all.css">
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
    </div><section>
        <form method="POST">
        <div class="search-bar">
          <div class="container">
          <input type="text" name="search" class="form-control" placeholder="Search..." name="search" required style="margin-bottom: 40px;margin-top: 120px;">
           <button type="submit" name="submit-search" class="std-admission-1" style="left:50px;">Search</button>
          <?php
            
    $conn = mysqli_connect('localhost','robert','admin','databank');
    if(isset($_POST['submit-search'])) {
    $search = $_POST["search"];
    $sql = "SELECT * FROM students WHERE full_name LIKE '%$search%' OR strand_course LIKE '%$search%'";
    $result = mysqli_query($conn,$sql);
    $checkResult = mysqli_num_rows($result);

    echo "  About ".$checkResult." result(s)!";
    if ($checkResult > 0) {
      while ($row = mysqli_fetch_assoc($result)) {

            $fname = $row['full_name'];
            $std_id = $row['student_id'];
            
        echo"   <h5 style='background:#ffffff;'><a href='student_profile.php?std_id=".$std_id."'>".$fname."</a></h5>
            </tr>
            </table>";
      }
    }

  }
  ?>
        </div>
        </div>
        <div class="search-container">
          </form>
        </div>

          </section>
        <article>
        <p class="std-title">STUDENT ADMISSION</p><br>
          <div class="std-admission-1">
            <a href="add_student.php?title=ADD STUDENT">
            <button type="submit" name="student-account" class="btn btn-success" style="margin-bottom: 30px;margin-left:50px;">Add Student</button></a>
          </div>
          <div class="std-admission-2">
            <button onclick="location.href='view_student.php?title=Select or search student to update'" type="submit" name="manage-student-request" class="btn btn-success" style="margin-left: 140px;">Update Student</button>
          </div>
          <div class="std-admission-3">
            <button onclick="location.href='view_student.php?title=VIEW ALL'" type="submit" name="manage-student-request" class="btn btn-success" style="margin-left: 140px;">View All</button>
          </div>
         
          </article>
</body>
</html>
<script src="../js/bootstrap.js">

</script>
