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
    $profilePic = 'assets/profilePic.jpeg';

    include 'nav.php';
    $xmr = 'assets/xmr.svg';
    $btc = 'assets/btc.svg';
    ?>
    <div class="homeDisplay">
        <img class="profilePic" src="<?php echo $profilePic; ?>" alt="profile-picture">
        <h1 class="nameTitle">LibertyImp</h1>
    </div>

    <div class="navDisplay">
        <?= $navBar; ?>
    </div>
    <div class="sloganDisplay">
        <p> Anarchy 🏴
            Free Markets📈
            Capitalism💰
        </p>
    </div>

    <div class="infoDisplay">
        <p class="infoText"> I'm an aspiring web dev currently learning PHP and CSS.<br>
            I plan to use this site to display my projects as I complete them.<br>
            I'm a believer in Monero and Bitcoin.<br>
            <a class="nostrLink"
                href="https://snort.social/nprofile1qqst7sd7ejyrree3tkdfn7plz95snxtqt7a4j36zxncfrfskz0w9nygpzamhxue69uhhsmtj9e6hxetwdaehgu3wdaexwtcppemhxue69uhkummn9ekx7mp0qy0hwumn8ghj7mn0wd68ytnnv46xsen0wfc8y6tkv93hjtnrdakj7mqe66d">
                Follow me on Nostr!
            </a>
        </p>
    </div>

</body>
<div class="tipDisplay">
    <footer class="tipText">
        <p>If you would like to leave a tip.</p>
        <a class="tipLink" href="xmr.php">
            <img class="xmrTip" src="<?php echo $xmr; ?>" alt="xmr-logo">
        </a>
        <a class="tipLink" href="btc.php">
            <img class="btcTip" src="<?php echo $btc; ?>" alt="btc-logo">
        </a>
    </footer>
</div>

</html>