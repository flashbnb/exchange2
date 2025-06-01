<?php
session_start();
require 'config.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

$user_id = $_SESSION['user_id'];
$result = $conn->query("SELECT * FROM users WHERE id = $user_id");
$user = $result->fetch_assoc();
?>
<h2>Welcome, <?= htmlspecialchars($user['username']) ?>!</h2>
<p>Your role: <?= $user['role'] ?></p>
<a href="logout.php">Logout</a>
