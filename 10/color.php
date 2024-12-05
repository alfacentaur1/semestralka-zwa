<?php

    //nutno session start
    //mazanim susenky rusim session
    session_start();

    define("SESSION_COUNTER","counter");

    // ¸definice konstanty
    define("COOKIE_THEME_NAME","theme");
    define("COOKIE_THEME_PATH","/~kopecfi3/");

    if(!isset($_SESSION[SESSION_COUNTER])) {
        $_SESSION[SESSION_COUNTER] = 0;
    }else {
        $_SESSION[SESSION_COUNTER]++;
    }

    //domain - zwa toad - ten server se kterym si povida
    //path - moje slozka
//      ukladaji se tam preference uzivatelu
//  $_COOKIE pole vsech susenek co nam prohlizec poslal - klic hodnota + jmeno domena expirace velikost,....
//kdyz menime header, tak nesmi byt zadny vypis, zadne html pred header, setcookie

    $theme = isset($_COOKIE[COOKIE_THEME_NAME]) ? $_COOKIE[COOKIE_THEME_NAME] : "light";
    // zpracovani formulare
    if (isset($_POST["theme"])) {
        $theme = $_POST["theme"];
        //kdyz 0 - bude to session
        //kdyz < 0, browser maze susenku

        //setcookie nastavi header
        setcookie(COOKIE_THEME_NAME,$theme,time()+60*60*24*365, COOKIE_THEME_PATH);
        //cesta - server kam se to posle

        //time je pocet sekund, musime prevest na dny
    }
    //smazeme
    setcookie(COOKIE_THEME_NAME,"",time()-1,COOKIE_THEME_PATH);
    
?>

<!-- !!!!!!!!!!!!!!!!!!!!!!!!!!vypis susenky htmlspecialchars!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo htmlspecialchars($theme)?>.css">
</head>
<body>
    <form action="color.php" method="POST">
        <label for="theme">Theme</label>
        <select name="theme" id="theme">
            <option value="light" <?php echo htmlspecialchars($theme) == "light" ? "selected":""?>>
                light
            </option>
            <option value="dark" <?php echo ($theme) == "dark" ? "selected":""?>>
                dark
            </option>
        </select>
        <div>
            <input type="submit" name="submit" value="Change theme">
        </div>
    </form>
    <h1>


        Behem tohoto sezeni jste tu uz <?php echo SESSION_COUNTER;?>
        
    </h1>
</body>
</html>