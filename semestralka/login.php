<?php
    require "functions.php";

    if(isset($_POST["submit"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];

        //validace username
        //TODO
        //$is_username_correct (kdyz je prazdne nebo spatne => false)
        //is_password_correct (kdyz je prazdne, nebo spatne => false)

    }else {
        //nic
    }

?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Log in</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/forms.css" rel="stylesheet">
    </head>
    <body>
        <div class="main">
            <div class="intro">
                <h1>Pronajmi.</h1>
                <h1>Prodej.</h1>
                <h1>Jednoduše.</h1>
                <h1 class="rentco">Rentco.</h1>
            </div>
    
        <form action="#" method="post">
            <fieldset class="fieldset-form">
                <div class="form">
                    <h1>Přihlášení</h1>
                    <h2>Vítejte</h2>
                </div>
                <div class="form">
                    <label for="username">Uživatelské jméno</label>
                    <input type="text" name="username" id="username" 
                    
                    <?php
                        if(isset($username)){
                            echo "value='" .htmlspecialchars($username)."'";
                        }
                    ?>>
                </div>
                <div class="form">
                    <label for="password">Heslo</label>
                    <input type="password" name="password" id="password" >
                </div>
                <div class="form">
                    <input type="submit" name="submit" class="submit">
                </div>
                <p>Nemáte účet? <a href="signup.php" >Registrovat se</a></p>
                <?php
                    if(isset($password) && isset($username) ) {
                        if(!$password || !$username) {
                            echo "<p class='php'>Špatně zadaný username nebo heslo</p>";
                        }
                    }
                ?>
    
            </fieldset>
        </form>
        </div>
        
    
    </body>
</html>