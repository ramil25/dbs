<?php
$sid =$_GET['std_id'];
require '../db.php';
if($conn)
{
  $sql ="SELECT * FROM students WHERE student_id=".$sid;
  $result =mysqli_query($conn,$sql);
  $fetch  =mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head>
  <title>Update Student</title>
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
      <h1 style="margin-top: 14%; font-size: 55px; font-weight: bold; font-family: calibri; text-align: center; width: 100%">UPDATE STUDENT</h1><br>
    <!-- Update input  -->
    <div class="col-md-6 col-lg-6 upd-student">
      <form method="POST">
          <label>Name: </label>
          <input type="text" name="fullname" value="<?php echo $fetch['full_name']; ?>" ><br>
          <label>Gender: </label>
          <input type="text" name="gender" value="<?php echo $fetch['gender']; ?>" ><br>
          <label>Last School Attended: </label>
          <input type="text" name="school_last_attended" value="<?php echo $fetch['school_last_attended']; ?>" ><br>
          <label>Strand / Course: </label>
          <input type="text" name="strand_course" value="<?php echo $fetch['strand_course']; ?>" ><br>
          <label>GWA: </label>
          <input type="text" name="grade_GWA" value="<?php echo $fetch['grade_GWA']; ?>" ><br>
          <label>Math: </label>
          <input type="text" name="grade_Math" value="<?php echo $fetch['grade_Math']; ?>" ><br>
          <label>English: </label>
          <input type="text" name="grade_English" value="<?php echo $fetch['grade_English']; ?>" ><br>
          <label>Science: </label>
          <input type="text" name="grade_Science" value="<?php echo $fetch['grade_Science']; ?>" ><br>
      </div>
       <div class="col-md-6 col-lg-6 upd-student-2">
      
          <label>1st Choice: </label>
          <input type="text" name="fchoice" value="<?php echo $fetch['fchoice']; ?>" ><br>
          <label>2nd Choice: </label>
          <input type="text" name="schoice" value="<?php echo$fetch['schoice']; ?>" ><br>
          <label>3rd Choice: </label>
          <input type="text" name="tchoice" value="<?php echo $fetch['tchoice']; ?>" ><br>
          <label>Raw Score: </label>
          <input type="text" name="raw_score" value="<?php echo $fetch['raw_score']; ?>" ><br>
          <label>Remarks: </label>
          <label>Remarks: </label>
          <select name="remarks" id="rem" value="<?php echo$fetch['schoice']; ?>">
            <option value="Qualified">Qualified</option>
            <option value="Unqualified">Unqualified</option>
          </select><br>
      </div>

      <div class="upd-btn">
          <button type="submit" name="submit" class="btn btn-success">Update</button>
        </div>
      </form>      
    </div>
<?php
if(isset($_POST['submit']))
{
  $fn =$_POST['fullname'];
  $gender =$_POST['gender'];
  $lsa =$_POST['school_last_attended'];
  $sc =$_POST['strand_course'];
  $gwa=$_POST['grade_GWA'];
  $math =$_POST['grade_Math'];
  $eng=$_POST['grade_English'];
  $scie=$_POST['grade_Science'];
  $fchoice =$_POST['fchoice'];
  $schoice =$_POST['schoice'];
  $tchoice =$_POST['tchoice'];
  $rs =$_POST['raw_score'];
  $rem =$_POST['remarks'];
  $updatesql ="UPDATE students set full_name='".$fn."',gender='".$gender."',school_last_attended='".$lsa."',strand_course='".$sc."',grade_GWA=".$gwa.",grade_Math=".$math.",grade_English=".$eng.",grade_Science=".$scie.",fchoice='".$fchoice."',schoice='".$schoice."',tchoice='".$tchoice."',raw_score=".$rs.",remarks='".$rem."' WHERE student_id=".$sid;
   $res= mysqli_query($conn,$updatesql);
  if($res)
  {
    echo "<script>alert('Updated successfully');
    location.href='student_admission.php';
    </script>";
  }
}

 } ?>
</body>
</html>
<script src="../js/bootstrap.js">

</script>
