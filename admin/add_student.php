<?php
$title=$_GET['title'];
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
          <span><img src="../img/lspu.png" height="100" width="100" /></span>
          <span><div class="left-float"><h1>Laguna State Polytechnic University</h1>
          <h2>Siniloan (Host) Campus</h2></div></span>
          </nav>
           <h1 style="margin-top: 14%; font-size: 55px; font-weight: bold; font-family: calibri; text-align: center; width: 100%"><?php echo $title; ?></h1><br>
      </div>
    </div>
    </div>
    </div>
    </div>
    <!-- Update input  -->
      <div class="upd-student">
        <form class="form" name="add_student" method="post" action="add_data.php" method="post">
          <label>Name: </label>
          <input type="text" name="fullname" placeholder="Full Name"><br>
          <label>Gender: </label>
          <input type="text" name="gender" placeholder="Gender"><br>
          <label>Last School Attended: </label>
          <input type="text" name="school_last_attended" placeholder="School Name"><br>
          <label>Strand / Course: </label>
          <input type="text" name="strand_course" placeholder="Enter Student Strand" ><br>
          <label>GWA: </label>
          <input type="text" name="grade_GWA" placeholder="Grade"><br>
          <label>Math: </label>
          <input type="text" name="grade_Math" placeholder="Grade"><br>
          <label>English: </label>
          <input type="text" name="grade_English" placeholder="Grade"><br>
          <label>Science: </label>
          <input type="text" name="grade_Science" placeholder="Grade"><br>
        </div>
        <div class="upd-student-2">
          <label>1st Choice: </label>
          <input type="text" name="fchoice" placeholder="Course"><br>
          <label>2nd Choice: </label>
          <input type="text" name="schoice" placeholder="Course"><br>
          <label>3rd Choice: </label>
          <input type="text" name="tchoice" placeholder="Course"><br>
          <label>Raw Score: </label>
          <input type="text" name="raw_score" placeholder="Input Score"><br>
          <label>Remarks: </label>
          <input type="text" name="remarks" placeholder="Remarks Here"><br>
          <label>Date: </label>
          <select>
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
       <select>
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
       </select>
          <select>
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
        <div class="upd-btn">
          <button type="submit" name="submit" class="btn btn-success">Add</button>
        </div>
        </form>
</body>
</html>
<script src="../js/bootstrap.js">

</script>
