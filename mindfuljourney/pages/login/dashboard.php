<?php

// Check if user is logged in
session_start();
if (!isset($_SESSION['user_id'])) {
    // Redirect to login.html
    header("Location: login.html");
    exit;
}

// Display user name
echo "Welcome, " . $_SESSION['user_name'] . "!";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f5f5f5;
        }

        h1 {
            font-size: 24px;
            font-weight: bold;
            color: #333;
        }
    </style>
</head>
<body>
    <h1>Welcome to the Dashboard</h1>
</body>
</html>