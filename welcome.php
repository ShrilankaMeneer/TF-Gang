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
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tools Forever - Magazijn</title>
    <link rel="stylesheet" href="welkom-style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<body>
  <div class="wrapper1">
    <p><b>Medewerker: </b><!--<?php /* if (!isset($_SESSION["full_name"])) { $medewerker = $_SESSION['full_name']; echo '<p>Welcome, $medewerker</p>'; */ ?>--></p>
    <p>Uitloggen?
        <a href="logout.php">Klik hier</a>
    </p>
    </div>

<div class="wrapper">
    <h2 class="title">Menu</h2>
    <div class="btns-wrapper">
        <div class="btn" onclick="showRegels()">
            <p>Voorraad</p></div>
        <div class="btn" onclick="showLeaderboard()">
            <p>Verwijderen</p>
          </div>
            <div class="btn" onclick="showLeaderboard()">
                <p>Toevoegen</p></div>
          </div>
    </div>


    <h2 class="title" id="title">Voorraad</h2>
<script src="Javascript/index.js"></script>

</body>
</html>
