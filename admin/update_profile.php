<!DOCTYPE html>
<html>
<head>
	<title>Update Admin Profile</title>
	<link rel="stylesheet" href="../css/bootstrap.css">
	<link rel="stylesheet"  href="../css/upd-css/designs.css">
	<link rel="icon" href="../img/lspu.png">
</head>
<body>
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
			<div class="col-md-12 col-lg-12">

    <!-- EDIT PHOTO AVATAR -->
    <div class="avatar">
     <button style="background-color: transparent; border: none;" type="File"><img src="../img/default.png" alt="your-photo" /></button>
    </div>
    <!-- EDIT PHOTO BUTTON -->
    <div class="photo-edit">
        <a type="file" href="#">Edit photo</a>
    </div>
    <p class="std-name">Admin Name</p>
    <!-- Update input  -->
      <div class="upd-student">
        <form  action="" method="post" >
          <label>Name: </label>
          <input type="text" name="name" placeholder="Full Name"><br>
          <label>Username: </label>
          <input type="text" name="usn" placeholder="Your want usename"><br>
          <label>Current Password: </label>
          <input type="Password" name="current-pwd" placeholder="Current Password"><br>
          <label>New Password: </label>
          <input type="Password" name="new-pwd" placeholder="Choose Secured Password" ><br>
          <label>Confirm<br> New Password: </label>
          <input type="text" name="confirm-new-pwd" placeholder="Enter Again"><br>
        </div>
        <div class="upd-student-2">
          <label>Mobile: </label>
          <input type="text" name="confirm-new-pwd" placeholder="ex: (+63)9192558726"><br>
          <label>Email: </label>
          <input type="text" name="confirm-new-pwd" placeholder="ex: youremail@gmail.com"><br>
        </div>
        <!-- update-btn  -->
        <div class="upd-btn">
          <button type="submit" name="upd-btn" class="btn btn-success">Update</button>
        </div>
        </form>
          </div>
    </div>
  </div>

</body>
</html>
<script src="../js/bootstrap.js">

</script>
