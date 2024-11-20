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
    <div class="nav">
        <nav>
            <h1>Rentco.</h1>
            <ul>
                <li><a href="index.php">Domů</a></li>
                <li><a href="addform.php">Přidat</a></li>
                <li><a href="profil.php">Profil</a></li>
            </ul>
            <ul>
                <li class="odkazy"><a href="login.php">Přihlásit</a></li>
                <li class="odkazy"><a href="signup.php">Registrovat</a></li>
                <li class="odkazy"><a href="signup.php">Odhlásit</a></li>
                <li><a href="vypisuzivatelu.php" class="a-role">Role</a></li>
            </ul>
        </nav>
    </div>
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
    
        <a href="inzerat.php">
            <div class="prispevek">
                <div class="prispevek-text">
                    <div class="prodej">
                        <h2>Prodej</h2>
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
            </div>
        </a>
        <a href="inzerat.php">
            <div class="prispevek" >
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
            </div>
        </a>
        <a href="inzerat.php">
            <div class="prispevek">
                <div class="prispevek-text">
                    <div class="prodej">
                        <h2>Prodej</h2>
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
            </div>
        </a>
        <a href="inzerat.php">
            <div class="prispevek">
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
            </div>
        </a>
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