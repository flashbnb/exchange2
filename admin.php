<?php
session_start();
require 'config.php';

if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
    header("Location: login.php");
    exit;
}

$result = $conn->query("SELECT id, username, role FROM users");
?>
<h2>Admin Dashboard</h2>
<table border="1">
<tr><th>ID</th><th>Username</th><th>Role</th></tr>
<?php while ($row = $result->fetch_assoc()): ?>
<tr>
    <td><?= $row['id'] ?></td>
    <td><?= $row['username'] ?></td>
    <td><?= $row['role'] ?></td>
</tr>
<?php endwhile; ?>
</table>
<a href="logout.php">Logout</a>