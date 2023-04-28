<?php
if(isset($_POST['submit'])) {
	$name = $_POST['name'];
	$rollno = $_POST['rollno'];
	$department = $_POST['department'];
	$course = $_POST['course'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
/* my own comment:FROM OPEN AI/ CHAT GTP
-Sure, here's an example of how you can display data on a student's dashboard page using HTML, CSS, and PHP:

-PHP (This code should be placed on the admin's dashboard page to submit data to the student dashboard page):
-Note: This code assumes that the form on the admin's dashboard page is submitted via a POST method and contains input fields with the names "name", "rollno", "department", "course", "email", and "phone".
 Also, the form on the admin's dashboard page should have an action that redirects to the student dashboard page.
*/ 
	// Redirect to student dashboard page with data
	header("Location: student-dashboard.php?name=$name&rollno=$rollno&department=$department&course=$course&email=$email&phone=$phone");
	exit();
    


}
?>
