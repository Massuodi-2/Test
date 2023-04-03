<?php
if(isset($_POST['ordinary_number'])) {
	$ordinary_number = $_POST['ordinary_number'];
	$student_filename = $ordinary_number . '.html';
	$student_path = './students/' . $student_filename;
	if(file_exists($student_path)) {
		echo "<script>window.open('$student_path', '_blank')</script>";
	} else {
		echo "Sorry, no activity data found for this student.";
	}
}
?>
