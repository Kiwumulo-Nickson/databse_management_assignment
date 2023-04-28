<!DOCTYPE html>
<html>
<head>
  <title>Student Complaint Form</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
  <div class="container-fluid">
    <h2>Student Complaint Form</h2>
    <form method="POST" action="submit_complaint.php">
      <div class="form-group">
        <label for="student_name">Student Name:</label>
        <input type="text" class="form-control" id="student_name" name="student_name" required>
      </div>
      <div class="form-group">
        <label for="complaint_type">Complaint Type:</label>
        <select class="form-control" id="complaint_type" name="complaint_type" required>
          <option value="">--Select--</option>
          <option value="Academic">Academic</option>
          <option value="Behavioral">Behavioral</option>
          <option value="Other">Other</option>
        </select>
      </div>
      <div class="form-group">
        <label for="complaint_details">Complaint Details:</label>
        <textarea class="form-control" id="complaint_details" name="complaint_details" rows="3" required></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
