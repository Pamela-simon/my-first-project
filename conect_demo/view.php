<!-- view.php -->
<?php
$conn = new mysqli("localhost", "root", "", "test_db");

if ($conn->connect_error) die("Connection failed: " . $conn->connect_error);

$sql = "SELECT * FROM users";
$result = $conn->query($sql);
?>

<h2>User List</h2>
<table border="1" cellpadding="8">
  <tr><th>ID</th><th>Name</th><th>Email</th><th>Actions</th></tr>
  <?php while($row = $result->fetch_assoc()): ?>
    <tr>
      <td><?= $row["id"] ?></td>
      <td><?= $row["name"] ?></td>
      <td><?= $row["email"] ?></td>
      <td>
        <a href="edit.php?id=<?= $row["id"] ?>">Edit</a> |
        <a href="delete.php?id=<?= $row["id"] ?>" onclick="return confirm('Are you sure?')">Delete</a>
      </td>
    </tr>
  <?php endwhile; ?>
</table>

<a href="index.html">← Add New</a>
