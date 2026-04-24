<?php
    session_start();

    if (!isset($_SESSION['name'])) {
        header("Location: index.php");
        exit();
    }

    $name = $_SESSION['name'];

    $lastVisit = isset($_COOKIE['last_visit']) ? $_COOKIE['last_visit'] : "First visit";

    date_default_timezone_set("Asia/Manila");
    $currentDateTime = date("F j, Y, - g:i a");

    setcookie("last_visit", $currentDateTime, time() + (86400), "/");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <h1>Welcome, <?php echo $name; ?>!</h1>

    <p>Current date and time: <?php echo $currentDateTime; ?></p>

    <p>Last visit: <?php echo $lastVisit; ?></p>
    
    
    <a href="logout.php">Logout</a>
</body>
</html>