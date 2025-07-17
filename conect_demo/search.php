<?php
$conn = new mysqli("localhost", "root", "", "test_db");
$q = $_GET['query'];

$sql = "SELECT * FROM users WHERE name LIKE '%$q%'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "<h2>Results for '$q'</h2><table border='1'>";
  echo "<tr><th>ID</th><th>Name</th><th>Email</th></tr>";
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>{$row['id']}</td><td>{$row['name']}</td><td>{$row['email']}</td></tr>";
  }
  echo "</table>";
} else {
  echo "No results found for '$q'.";
}
?>
