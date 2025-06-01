
<?php
session_start();

// Redirect to home if user is already logged in
if (isset($_SESSION['user_id'])) {
    header("Location: home.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>XPay - Welcome</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: #09151C;
            font-family: Arial, sans-serif;
            color: #FFFFFF;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            text-align: center;
            max-width: 400px;
            padding: 40px;
            background-color: #0E1E2A;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 123, 255, 0.5);
        }

        .container h1 {
            margin-bottom: 30px;
            font-size: 28px;
            color: #FFFFFF;
        }

        .button {
            display: inline-block;
            width: 100%;
            padding: 12px 0;
            margin: 10px 0;
            font-size: 16px;
            background-color: #007BFF;
            color: #FFFFFF;
            text-decoration: none;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .button:hover {
            background-color: #0056b3;
        }

        .footer {
            margin-top: 20px;
            font-size: 12px;
            color: #AAAAAA;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Welcome to XPay</h1>
        <form action="login.php" method="get">
            <button class="button" type="submit">Login</button>
        </form>
        <form action="register.php" method="get">
            <button class="button" type="submit">Register</button>
        </form>
        <div class="footer">
            &copy; <?php echo date("Y"); ?> XPay. All rights reserved.
        </div>
    </div>
</body>
</html>
