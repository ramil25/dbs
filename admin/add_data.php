<?php
$cookie_name = "loggedin";

$full_name = filter_input(INPUT_POST,'fullname');
$gender = filter_input(INPUT_POST,'gender');
$school_last_attended = filter_input(INPUT_POST,'school_last_attended');
$strand_course = filter_input(INPUT_POST,'strand_course');
$grade_GWA = filter_input(INPUT_POST,'grade_GWA');
$grade_Math = filter_input(INPUT_POST,'grade_Math');
$grade_English = filter_input(INPUT_POST,'grade_English');
$grade_Science = filter_input(INPUT_POST,'grade_Science');
$fchoice = filter_input(INPUT_POST,'fchoice');
$schoice = filter_input(INPUT_POST,'schoice');
$tchoice = filter_input(INPUT_POST,'tchoice');
$raw_score = filter_input(INPUT_POST,'raw_score');
$remarks = filter_input(INPUT_POST,'remarks');
$date_ad = filter_input(INPUT_POST,'date_ad');
$photo_link = filter_input(INPUT_POST,'photo_link');


$server = "localhost";
$user = "root";
$pass = "";
$db = "databank";

$conn = mysqli_connect($server, $user, $pass, $db);

if (mysqli_connect_error()) {
	die('Connect Error ('.mysqli_connect_errorno() .')'.mysqli_connect_error());
}
else {
	$sql = "INSERT INTO students (fullname, gender, school_last_attended, strand_course, grade_GWA, grade_Math, grade_English, grade_Science, fchoice, schoice, tchoice, raw_score, remarks, date_ad, photo_link) VALUES ($fullname','$gender','$school_last_attended','$strand_course','$grade_GWA','$grade_Math','$grade_English','$grade_Science','$fchoice','$schoice','$tchoice','$raw_score','$remarks','$date_ad','$photo_link')";
	if ($conn->query($sql)) {
		echo "Account Succesfully Created";
		header("refresh:2;url = student_admission.php");
	}
	else {
		echo "Error:".$sql."<br>".$conn->error;
	}
	$conn->close();
}
?>
