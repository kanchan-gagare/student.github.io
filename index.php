<?php
  include('db.php');
?>
<!docktype html>
<head>
<title>Students</title>
<link rel="stylesheet"  type="text/css" href="style.css">
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

  <div class="container">
    <div class="login-box">
          <h2 align="center">Student List</h2>
          <a href="student_add.php" class="btn btn-primary">Add Student</a>
          <table style="width:100%" border="1" class="table table-striped table-dark">
            <thead>
              <th>Name</th>
              <th>Email</th>
              <th>Mobile</th>
              <th>DOB</th>
              <th>Pin Code</th>
              <th>Edit</th>
              <th>Delete</th>
          </thead>
          <tbody>
            <?php
              $selq = "SELECT * FROM t1";
              $result = $conn->query($selq);
              while($row = $result->fetch_assoc()) {
            ?>
            <tr>
              <td><?php echo $row['Name']; ?></td>
              <td><?php echo $row['Email']; ?></td>
              <td><?php echo $row['mobile_no']; ?></td>
              <td><?php echo $row['dob']; ?></td>
              <td><?php echo $row['pin_code']; ?></td>
              <td>
                <a href="student_edit.php?id=<?php echo $row['id']?>" class="btn btn-primary">Edit</a></button>
              </td>
              <td>
                <a href="#" onclick="delete_stud('<?php echo $row['id']?>')" class="btn btn-primary">Delete</a></button>
              </td>
            </tr>
            <?php
              }
              $conn->close();
            ?>
            </tbody>
          </table>




  </div>
</div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
  function delete_stud(id){
    //alert(id);
    $.ajax({
      url: 'student_delete.php',
      method: "POST",
      data: {
        id: id
      },
      dataType: 'html',
      success: function (data) {
        alert('Student Deleted Successfully');
        window.location.reload();
      }
    });
  }
</script>

</html>
