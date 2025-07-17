<?php
$conn = new mysqli("localhost", "root", "", "test_db");
$id = $_GET['id'];

$result = $conn->query("SELECT * FROM users WHERE id=$id");
$row = $result->fetch_assoc();
?>

<h2>Edit User</h2>
<form action="update.php" method="POST">
  <input type="hidden" name="id" value="<?= $row['id'] ?>">
  Name: <input type="text" name="name" value="<?= $row['name'] ?>"><br><br>
  Email: <input type="email" name="email" value="<?= $row['email'] ?>"><br><br>
  <input type="submit" value="Update">
</form>
