<?php

session_start();

if (!isset($_SESSION["user_id"])) {
    header("Location: index.php");
}

include 'config.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css">
    <title>Tools Forever - Magazijn</title>
</head>

<body class="profile-page">
    <div class="wrapper">
        <p>Uitloggen?
            <a href="logout.php">Klik hier</a>
        </p>
        <h2>Magazijn</h2>
    </div>
</body>
</html>
