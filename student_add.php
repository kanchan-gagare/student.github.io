<!docktype html>
<head>
<title>login and registration page</title>
<link rel="stylesheet"  type="text/css" href="style.css">
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

  <div class="container">
    <div class="login-box">
          <h2 align="center">Add Student</h2>
          <form action="student_addSave.php" method="post">
            <div class="form-group">
              <label>Name:</label>
              <input type="text" name="Name" class="form-control" required>
            </div>
            <div class="form-group">
              <label>Email:</label>
              <input type="text" name="Email" class="form-control" required>
            </div>
            <div class="form-group">
              <label>Mobile No.</label>
              <input type="number" name="mobile_no" class="form-control" required>
            </div>
            <div class="form-group">
              <label>Date Of Birth:</label>
              <input type="date" name="dob" id="dob" class="form-control" required>
            </div>

            <div class="form-group">
              <label>Pin Code:</label>
              <input type="number" name="pin_code" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary" name="submit" value="submit">SUBMIT</button>
            <a type="cancel" href="index.php" class="btn btn-primary">CANCEL</a>
    </form>
  </div>
</div>
</body>

</html>
