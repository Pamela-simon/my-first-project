<?php
$conn = new mysqli("localhost", "root", "", "test_db");
$id = $_GET['id'];

$sql = "DELETE FROM users WHERE id=$id";

if ($conn->query($sql) === TRUE) {
  echo "🗑️ Deleted successfully. <a href='view.php'>Go back</a>";
} else {
  echo "❌ Error: " . $conn->error;
}
?>
