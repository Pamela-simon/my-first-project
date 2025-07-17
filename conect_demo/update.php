<?php
$conn = new mysqli("localhost", "root", "", "test_db");

$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];

$sql = "UPDATE users SET name='$name', email='$email' WHERE id=$id";

if ($conn->query($sql) === TRUE) {
  echo "✅ Updated successfully. <a href='view.php'>Go back</a>";
} else {
  echo "❌ Error: " . $conn->error;
}
?>
