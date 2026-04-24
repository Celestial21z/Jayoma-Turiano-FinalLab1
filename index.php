
<?php
    session_start();
    
    if (isset($_SESSION['name'])) {
        header("Location: dashboard.php");
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
<link rel="stylesheet" href="css/style.css">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>

<body>
    <div class="container mt-5">
        <form method="POST" action="">
            <label for="name">Enter Name:</label>
            <input type="text" maxlength="30" id="name" name="name" required>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = htmlspecialchars($_POST['name']);

            $_SESSION['name'] = $name;

            header("Location: dashboard.php");
            exit();
        }
    ?>
    
</body>
</html>