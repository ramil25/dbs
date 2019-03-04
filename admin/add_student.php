<?php
$title=$_GET['title'];
if(isset($_POST['add-std']))
{
  require '../db.php';
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
  $date=$_POST['month']."/".$_POST['day']."/".$_POST['year'];
  $addsql ="INSERT INTO students(full_name,gender,school_last_attended,strand_course,grade_GWA,grade_Math,grade_English,grade_Science,fchoice,schoice,tchoice,raw_score,remarks,date_ad) VALUES ('".$fn."','".$gender."','".$lsa."','".$sc."',".$gwa.",".$math.",".$eng.",".$scie.",'".$fchoice."','".$schoice."','".$tchoice."','".$rs."','".$rem."','".$date."')";
  $res= mysqli_query($conn,$addsql);
  if($res)
  {
    echo "<script>alert('Student added successfully');
    location.href='student_admission.php';
    </script>";
  }
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Add Student</title>
  <link rel="stylesheet" href="../css/bootstrap.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet"  href="../css/custom.css">
  <link rel="icon" href="../img/lspu.png">
</head>
<body>
  <form class="form" name="add_student" method="post">
    <div class="container">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg" style="width: 100%; text-align: center; display: block; font-family: Times New Roman;background-color: #005080;">
          <span style="float: left; padding-left:200px;"><img src="../img/lspu.png" height="100" width="100" /></span>
          <div style="text-align: center;"><h1>Laguna State Polytechnic University</h1>
          <h2>Siniloan (Host) Campus</h2></div>
          </nav>
        </div>
        <h1  style="margin-top:5%; font-size: 30px; text-align: center;">ADD STUDENT</h1>
    <div class="row">
      <div class="col-md-6 col-lg-6 upd-student">
          <label>Name: </label>
          <input type="text" name="fullname" placeholder="Full Name" required><br>
          <label>Gender: </label>
          <input type="text" name="gender" placeholder="Gender" required><br>
          <label>Last School Attended: </label>
          <input type="text" name="school_last_attended" placeholder="School Name" required><br>
          <label>Strand / Course: </label>
          <input type="text" name="strand_course" placeholder="Enter Student Strand" required ><br>
          <label>GWA: </label>
          <input type="text" name="grade_GWA" placeholder="Grade" required><br>
          <label>Math: </label>
          <input type="text" name="grade_Math" placeholder="Grade" required><br>
          <label>English: </label>
          <input type="text" name="grade_English" placeholder="Grade" required><br>
          <label>Science: </label>
          <input type="text" name="grade_Science" placeholder="Grade" required><br>
        </div>
        <div class="col col-md-6 col-lg-6 upd-student-2">
          <label>1st Choice: </label>
          <input type="text" name="fchoice" placeholder="Course" required><br>
          <label>2nd Choice: </label>
          <input type="text" name="schoice" placeholder="Course" required><br>
          <label>3rd Choice: </label>
          <input type="text" name="tchoice" placeholder="Course" required><br>
          <label>Raw Score: </label>
          <input type="text" name="raw_score" placeholder="Input Score" required><br>
          <label>Remarks: </label>
          <input type="text" name="remarks" placeholder="Remarks Here" required><br>
          <label>Date: </label>
          <select name="year">
            <option value="2019">2019</option>
            <option value="2020">2020</option>
            <option value="2021">2021</option>
            <option value="2022">2022</option>
            <option value="2023">2023</option>
            <option value="2024">2024</option>
            <option value="2025">2025</option>
            <option value="2026">2026</option>
            <option value="2027">2027</option>
            <option value="2028">2028</option>
            <option value="2029">2029</option>
             <option value="2030">2030</option>
          </select>
       <select name="day">
         <option value="1">1</option>
         <option value="2">2</option>
         <option value="3">3</option>
         <option value="4">4</option>
         <option value="5">5</option>
         <option value="6">6</option>
         <option value="7">7</option>
         <option value="8">8</option>
         <option value="9">9</option>
         <option value="10">10</option>
         <option value="11">11</option>
         <option value="12">12</option>
         <option value="13">13</option>
         <option value="14">14</option>
         <option value="15">15</option>
         <option value="16">16</option>
         <option value="17">17</option>
         <option value="18">18</option>
         <option value="19">19</option>
         <option value="20">20</option>
         <option value="21">21</option>
         <option value="22">22</option>
         <option value="23">23</option>
         <option value="24">24</option>
         <option value="25">25</option>
         <option value="26">26</option>
         <option value="27">27</option>
         <option value="28">28</option>
         <option value="29">29</option>
         <option value="30">30</option>
         <option value="31">31</option>
       </select>
          <select name="month">
            <option value="June">June</option>
            <option value="July">July</option>
            <option value="August">August</option>
            <option value="September">September</option>
            <option value="October">October</option>
            <option value="November">November</option>
            <option value="December">December</option>
            <option value="January">January</option>
            <option value="February">February</option>
            <option value="March">March</option>
            <option value="April">April</option>
             <option value="May">May</option>
          </select>
          <br><label>Upload File: </label>
          <input type="file" name="photo_link" placeholder="Course" style="text-indent: 0px"><br>
        </div>
        </div>
        <div class="upd-btn" style="text-align: center; margin-top: 50px;">
          <button type="submit" name="add-std" class="btn btn-success btn-lg">Add</button>
        </div>
        </div>
        </form>
        
       
      
</body>
</html>
<script src="../js/bootstrap.js">

</script>
