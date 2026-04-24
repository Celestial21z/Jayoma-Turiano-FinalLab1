<?php
    session_start();

    if (!isset($_SESSION['name'])) {
        header("Location: index.php");
        exit();
    }

    $name = $_SESSION['name'];

    $lastVisit = isset($_COOKIE['last_visit']) ? $_COOKIE['last_visit'] : "First visit";

    date_default_timezone_set("Asia/Manila");
    $currentDateTime = date("F j, Y, - g:i A");

    setcookie("last_visit", $currentDateTime, time() + (86400), "/");
?>
<!DOCTYPE html>
<html lang="en">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
<link rel="stylesheet" href="css/style.css">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <div class="container mt-5">
        <h1>Welcome, <?php echo $name; ?>!</h1>

    <p>Current date and time: <?php echo $currentDateTime; ?></p>

        <p>Last visit: <?php echo $lastVisit; ?></p>


        <a href="logout.php" class="btn btn-danger">Logout</a>
    </div>
</body>
</html>