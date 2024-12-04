<?php
    require "functions.php";
    $ads = loadAds();

?>


<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/inzerat.css">
    <link rel="stylesheet" href="css/univerzal.css">
    <title>Inzerát</title>
</head>
<body>
<?php require "nav.php" ?>
    <!-- <div class="content-container">
        <div class="inzerat">
            <img src="images/img_realitky.jpg" alt="obrazek-inzeratu">
            <div class="text-container">

            </div>
            <div class="text-container">
                <p class="underline">Lokalita</p>
                <p>Praha 4</p>
            </div>
            <div class="text-container">
                <p class="underline">Cena</p>
                <p>24 000 kč/měsíc</p>
            </div>
            <div class="text-container">
                <p class="underline">Rozměry</p>
                <p>24 m2</p>
            </div>
            <div class="text-container">
                <p class="underline">Popis</p>
                <p>Tento byt se nachází ve velmi klidné lokalitě. V dosahu 5 minut je k dispozici metro, stanice C Kačerov. K dispozici je v panelovém bytě. Preferuji nájemníky nekuřáky, bez zvířat.</p>
            </div>
            <div class="text-container">
                <p class="underline">Uživatel</p>
                <p>Filip K</p>
            </div>
            <div class="text-container">
                <p class="underline">Email</p>
                <p>kopecfi3@student.cvut.cz</p>
            </div>
            <div class="prispevek-uprava">
                <a href="upravit.php" class="prispevek-a">upravit</a>
                <a href="" class="prispevek-a">smazat</a>
            </div>
        </div>
    </div> -->
    <?php
    $current_id = $_GET["id"];

    // Prohledávání inzerátů
foreach ($ads as $adGroup) {
    if (isset($adGroup[$current_id])) {
        $foundAd = $adGroup[$current_id];
        break;
    }
}

// Kontrola, zda byl inzerát nalezen
if ($foundAd) {
    $prodej = htmlspecialchars($foundAd["prodej"]);
    $lokalita = htmlspecialchars($foundAd["lokalita"]);
    $cena = htmlspecialchars($foundAd["cena"]);
    $mena = htmlspecialchars($foundAd["mena"]);
    $rozmery = htmlspecialchars($foundAd["rozmery"]);
    $popis = htmlspecialchars($foundAd["popis"]);
} else {
    echo "<p>Inzerát s ID $current_id nebyl nalezen.</p>";
    exit;
}

        
    echo "
    <div class='content-container'>
    <div class='inzerat'>
            <img src='' alt='obrazek-inzeratu'>
            <div class='text-container'>

            </div>
            <div class='text-container'>
                <p class='underline'>Lokalita</p>
                <p>$lokalita</p>
            </div>
            <div class='text-container'>
                <p class='underline'>Cena</p>
                <p>$cena $mena/měsíc</p>
            </div>
            <div class='text-container'>
                <p class='underline'>Rozměry</p>
                <p>$rozmery m2</p>
            </div>
            <div class='text-container'>
                <p class='underline'>Popis</p>
                <p>$popis</p>
            </div>
            <div class='text-container'>
                <p class='underline'>Uživatel</p>
                <p>Filip K</p>
            </div>
            <div class='text-container'>
                <p class='underline'>Email</p>
                <p>kopecfi3@student.cvut.cz</p>
            </div>
            <div class='prispevek-uprava'>
                <a href='upravit.php?id=$current_id' class='prispevek-a'>upravit</a>
                <a href='' class='prispevek-a'>smazat</a>
            </div>
        </div>
    </div>
    "
    ?>
</body>
</html>
