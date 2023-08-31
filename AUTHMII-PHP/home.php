<?php
session_start();

if(isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
    ?>

    <!DOCTYPE html>
    <html>
    <head>

        <title>AuthMii Home</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <h1>Hello, <?php echo $_SESSION['username']; ?></h1>
        <a href="logout.php">Log out</a>
    </body>
    </html>

    <?php
}
else {
    header("Location: index.php");
    exit();
}
?>