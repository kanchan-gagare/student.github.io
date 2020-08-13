<?php
include('db.php');
$deleteq = "DELETE FROM t1 WHERE id=".$_POST['id'];
$result = $conn->query($deleteq);
echo "success";
?>
