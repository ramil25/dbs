<?php
$sid =$_GET['std_id'];
$conn = mysqli_connect('localhost','root','','databank');
if($conn)
{
  $sql ="SELECT * FROM students WHERE student_id=".$sid;
  $result =mysqli_query($conn,$sql);
  $fetch  =mysqli_fetch_assoc($result);
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
          </div>
        <div class="csidebar">
          <br><br>
  </div>
  <nav>
        <span><img style="display: block;" src="../img/lspu.png" height="100" width="100" /></span>
          <span><div class="left-float"><h1>Laguna State Polytechnic University</h1>
          <h2>Siniloan (Host) Campus</h2></div></span>
          </nav>
  <div class="container">
    <div class="row">
    <div class="back-css">
    <a href="javascript:history.go(-1)" class="btn btn-success">Back</a>
    </div>
      <h1 style="margin-top: 14%; font-size: 55px; font-weight: bold; font-family: calibri; text-align: center; width: 100%">Student Profile</h1><br>
    <!-- Update input  -->
    <div class="col-md-6 col-lg-6 upd-student">
          <label>Name: </label>
          <input type="text" name="fullname" value="<?php echo $fetch['full_name']; ?>" disabled><br>
          <label>Gender: </label>
          <input type="text" name="gender" value="<?php echo $fetch['gender']; ?>" disabled><br>
          <label>Last School Attended: </label>
          <input type="text" name="school_last_attended" value="<?php echo $fetch['school_last_attended']; ?>" disabled><br>
          <label>Strand / Course: </label>
          <input type="text" name="strand_course" value="<?php echo $fetch['strand_course']; ?>" disabled><br>
          <label>GWA: </label>
          <input type="text" name="grade_GWA" value="<?php echo $fetch['grade_GWA']; ?>" disabled><br>
          <label>Math: </label>
          <input type="text" name="grade_Math" value="<?php echo $fetch['grade_Math']; ?>" disabled><br>
          <label>English: </label>
          <input type="text" name="grade_English" value="<?php echo $fetch['grade_English']; ?>" disabled><br>
          <label>Science: </label>
          <input type="text" name="grade_Science" value="<?php echo $fetch['grade_Science']; ?>" disabled><br>
      </div>
       <div class="col-md-6 col-lg-6 upd-student-2">
      
          <label>1st Choice: </label>
          <input type="text" name="fchoice" value="<?php echo $fetch['fchoice']; ?>" disabled><br>
          <label>2nd Choice: </label>
          <input type="text" name="schoice" value="<?php echo$fetch['schoice']; ?>" disabled><br>
          <label>3rd Choice: </label>
          <input type="text" name="tchoice" value="<?php echo $fetch['tchoice']; ?>" disabled><br>
          <label>Raw Score: </label>
          <input type="text" name="raw_score" value="<?php echo $fetch['raw_score']; ?>" disabled><br>
          <label>Remarks: </label>
          <input type="text" name="remarks" value="<?php echo $fetch['remarks']; ?>" disabled><br>
      </div>
            
    </div>
<?php } ?>
</body>
</html>
<script src="../js/bootstrap.js">

</script>
