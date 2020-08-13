<?php
include('db.php');

$name=$_POST['Name'];
$mail=$_POST['Email'];
$mobile=$_POST['mobile_no'];
$dob=date('Y-m-d',strtotime($_POST['dob']));
$pin_code=$_POST['pin_code'];

$addq="insert into t1(Name,Email,mobile_no ,dob,pin_code) values('$name','$mail','$mobile','$dob','$pin_code')";
$result = $conn->query($addq);
header('location:index.php');

?>
