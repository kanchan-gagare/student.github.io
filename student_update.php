<?php
$servername = "localhost";
$username = "root";
$password = "12345";
$dbname = "db";

// Create connection
$conn = new mysqli('localhost', 'root', '12345', 'user');
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE t1 SET lastname='Doe' WHERE id=2";

if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();
?>
