<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@300;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/main.css">
    <title>LibertyImp</title>
</head>

<body>
    <?php
    $profilePic = '/assets/profilePic.jpeg';

    include 'nav.php';
    ?>
    <div class="homeDisplay">
        <img class="profilePic" src="<?php echo $profilePic; ?>" alt="profile-picture">
        <h1 class="nameTitle">LibertyImp</h1>
    </div>

    <div class="navDisplay">
        <?= $navBar; ?>
    </div>

    <div class="infoDisplay">
        <p class="infoText">Work in progress.</p>
    </div>


</html>