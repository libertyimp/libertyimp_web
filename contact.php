<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@300;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/main.css">
    <title>LibertyImp | Contact</title>
</head>

<body>
    <?php
    include("nav.php");
    ?>


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

    <div class="qrDisplay">
        <img class="qr" src="/assets/session_qr.png">
    </div>
    <div class="tipWallet">

        <h2>Session</h2>
        <p>
            059a914193bab7b652598058ac1f0<br>c7dd570689d19788def83e9d0695b2405790a
        </p>
        <div class="qrDisplay">
            <img class="qr" src="/assets/xmr_qr.png">
        </div>
        <div class="tipWallet">

            <h2>SimpleX</h2>
            <a class="navOptions"
                href="https://simplex.chat/contact#/?v=1-4&smp=smp%3A%2F%2Fh--vW7ZSkXPeOUpfxlFGgauQmXNFOzGoizak7Ult7cw%3D%40smp15.simplex.im%2FPpMAqVXlTELgVtCsAeghpPlkthfvLkc9%23%2F%3Fv%3D1-2%26dh%3DMCowBQYDK2VuAyEAtArqZzNWlpF6Obdc2jXYbitmVsvzRnin02HQIxnGohw%253D%26srv%3Doauu4bgijybyhczbnxtlggo6hiubahmeutaqineuyy23aojpih3dajad.onion">
                Contact Me
            </a>
        </div>


</body>

</html>