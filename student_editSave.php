<?php
include('db.php');

$name=$_POST['Name'];
$mail=$_POST['Email'];
$mobile=$_POST['mobile_no'];
$dob=date('Y-m-d',strtotime($_POST['dob']));
$pin_code=$_POST['pin_code'];

$updateq = "UPDATE t1 SET Name='$name', Email='$mail', mobile_no='$mobile', dob='$dob', pin_code='$pin_code' WHERE id=".$_POST['id'];
//die;
$result = $conn->query($updateq);
header('location:index.php');

?>
