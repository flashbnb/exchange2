<?php
session_start();
require 'config.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

echo "<h2>Make a Payment</h2>";
?>
<form method="POST" action="">
    <input type="text" name="amount" placeholder="Amount" required>
    <button type="submit">Pay Now</button>
</form>
<a href="logout.php">Logout</a>
