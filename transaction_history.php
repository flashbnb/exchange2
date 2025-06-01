<?php
session_start();
require 'config.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

echo "<h2>Your Transactions</h2>";
// Add your transaction logic here
?>
<a href="logout.php">Logout</a>
