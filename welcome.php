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
    <link rel="stylesheet" href="welkom-style.css">
    <title>Tools Forever - Magazijn</title>
</head>

<body class="profile-page">
  <div class="wrapper">
<h2 class="title">Menu</h2>
<div class="btns-wrapper">
  <div class="btn" onclick="showVoorraad()">
      <p>Voorraad</p></div>
  <div class="btn" onclick="showVerwijderen()">
      <p>Verwijderen</p>
    </div>
      <div class="btn" onclick="showToevoegen()">
          <p>Toevoegen</p></div>
    </div>
    <h2 class="title" id="title">Voorraad</h2>

    <div class="box" id="voorraad">
        <p>testvoorraad</p>
    </div>
    <div class="box" id="verwijderen">
        <p>testverwijderen</p>
    </div>
    <div class="box" id="toevoegen">
        <p>testtoevoegen</p>
    </div>
</div>

<script src="Javascript/index.js"></script>
</body>
</html>
