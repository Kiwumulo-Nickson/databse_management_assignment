<!DOCTYPE html>
<html>
<head>
	<title>Student Dashboard</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
//Sure, here's an example of how you can display data on a student's dashboard page using HTML, CSS, and PHP:
//HTML:
//can change extension to html
<body>
	<div class="container">
		<h1>Student Dashboard</h1>
		<div class="data">
			<p>Student Name: <?php echo $_POST['name']; ?></p>
			<p>Roll No: <?php echo $_POST['rollno']; ?></p>
			<p>Department: <?php echo $_POST['department']; ?></p>
			<p>Course: <?php echo $_POST['course']; ?></p>
			<p>Email: <?php echo $_POST['email']; ?></p>
			<p>Phone: <?php echo $_POST['phone']; ?></p>
		</div>
	</div>
</body>
</html>
