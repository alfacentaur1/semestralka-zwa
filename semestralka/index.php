<?php
    //TODO
    //udělat session a váýpis vítej uživateli $_SESSION["uzivatel"]
?>



<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hlavní stránka</title>
    <link rel="stylesheet" href="css/mainpage.css">
    <link rel="stylesheet" href="css/univerzal.css">
</head>
<body>
<?php require "nav.php" ?>
<?php 
    if (isset($_GET["php"])){
         $message = $_GET["php"];
        echo "<div class='phpdiv'></div><p class='php'>$message</p></div>";
    }
    
    ?>
    <div class="nadpis">
        <h3>Hlavní stránka</h3>
    </div>
    <div class="main">  
        <div class="prispevek">
            <a href="inzerat.php">
                <div class="prispevek-text">
                    <div class="prodej">
                        <h2>Pronájem</h2>
                    </div>
                    <div class="prispevek-img">
                        <img src="images/img_realitky.jpg" alt="obrazek-inzeratu">
                    </div>
                    <div class="prispevek-lokalita">
                        <p>Lokalita: Praha</p>
                    </div>
                    <div class="prispevek-cena">
                        <p>Cena: 23 000 Kč</p>
                    </div>
                    <div class="prispevek-rozmery">
                        <p>Rozměry: 46 m2</p>
                    </div>
                </div>
            </a>     
        </div>
    
        
    </div>
    <div class="buttons">
        <div class="skip">
            <a href="index.php" class="page-button">1</a>
        </div>
        <div class="skip">
            <a href="index.php" class="page-button">2</a>
        </div>
        <div class="skip">
            <a href="index.php" class="page-button">3</a>
        </div>
    </div>
</body>
</html>