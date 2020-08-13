<!docktype html>
<head>
<title>login and registration page</title>
<link rel="stylesheet"  type="text/css" href="style.css">
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<?php
  include('db.php');
  $editq="SELECT * FROM t1 WHERE id=".$_GET['id'];
  $result = $conn->query($editq);
  $row = $result->fetch_assoc();
?>
</head>
<body>

  <div class="container">
    <div class="login-box">
          <h2 align="center">Add Student</h2>
          <form action="student_editSave.php" method="post">
            <input type="hidden" name="id" class="form-control" value="<?php echo $_GET['id'];?>" readonly>
            <div class="form-group">
              <label>Name:</label>
              <input type="text" name="Name" class="form-control" value="<?php echo $row['Name'];?>" required>
            </div>
            <div class="form-group">
              <label>Email:</label>
              <input type="text" name="Email" class="form-control" value="<?php echo $row['Email']?>" required>
            </div>
            <div class="form-group">
              <label>Mobile No.</label>
              <input type="number" name="mobile_no" class="form-control" value="<?php echo $row['mobile_no']?>" required>
            </div>
            <div class="form-group">
              <label>Date Of Birth:</label>
              <input type="date" name="dob" id="dob" class="form-control" value="<?php echo $row['dob']?>" required>
            </div>

            <div class="form-group">
              <label>Pin Code:</label>
              <input type="number" name="pin_code" class="form-control" value="<?php echo $row['pin_code']?>" required>
            </div>

            <button type="submit" class="btn btn-primary" name="submit" value="submit">SUBMIT</button>
            <a type="cancel" href="index.php" class="btn btn-primary">CANCEL</a>
    </form>
  </div>
</div>
</body>

</html>
