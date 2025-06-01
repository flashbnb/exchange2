<?php
session_start();
require 'config.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}
?>
<h1>Welcome to Home Page, <?= $_SESSION['username'] ?>!</h1>
<a href="profile.php">My Profile</a> |
<a href="transaction_history.php">My Transactions</a> |
<a href="logout.php">Logout</a>
