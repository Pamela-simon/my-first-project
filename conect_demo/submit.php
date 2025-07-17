<?php
// Database connection info
$servername = "localhost";
$username = "root";
$password = ""; // Default is empty in XAMPP
$dbname = "test_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Get form data
$name = $_POST['name'];
$email = $_POST['email'];

// Insert into DB
$sql = "INSERT INTO users (name, email) VALUES ('$name', '$email')";

if ($conn->query($sql) === TRUE) {
  echo "✔️ New record created successfully!";
} else {
  echo "❌ Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
