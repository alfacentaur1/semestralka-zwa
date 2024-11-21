<?php

    require "functions.php";

    if(isset($_POST["submit"])) {
        $username = $_POST["username"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $password_znovu = $_POST["password_znovu"];

        //validace username
        $validated_username = validate_username($username);
        $validated_password = validate_password($password);
        $validated_email = validate_email($email);
        $are_passwords_same = are_passwords_same($password,$password_znovu);


    }else {
        //nic
    }

?>


<!DOCTYPE html>
<html lang="cs">
<head>
    <title>Registrace</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/forms.css" rel="stylesheet">
    <script src="js/script.js" defer></script> 
</head>
<body>
    <div class="main">
        <div class="intro">
            <h1>Pronajmi.</h1>
            <h1>Prodej.</h1>
            <h1>Jednoduše.</h1>
            <h1 class="rentco">Rentco.</h1>
        </div>
        <form action="" method="post">
            <fieldset>
                <div class="form">
                    <h1>Registrace</h1>
                    <h2>Vítejte</h2>
                </div>
                <div class="form">
                    <label for="username">Uživatelské jméno</label>
                    <input type="text" id="username" name="username"
                    <?php
                        if(isset($username)){
                            echo "value='" .htmlspecialchars($username)."'";
                        }
                    ?>
                    required>
                </div>
                <div class="form">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" 
                    <?php
                        if(isset($email)){
                            echo "value='" .htmlspecialchars($email)."'";
                        }
                    ?>
                    required >
                </div>
                <div class="form">
                    <label for="password">Heslo</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <div class="form">
                    <label for="password_znovu">Heslo znovu</label>
                    <input type="password" id="password_znovu" name="password_znovu" required>
                </div>
                <div class="form">
                    <input type="submit" name="submit" class="submit">
                </div>
                <p>Již máte účet? <a href="login.php">Přihlásit se</a></p>
                <p id="error_hesla">Hesla se neshodují</p>
                <?php
                    if(isset($validated_username) && $validated_username !== "good") {
                        if($validated_username == "len") {
                            echo "<p class='php'>Username musí mít minimálně 6 znaků</p>";
                        }elseif($validated_username == "taken") {
                            echo "<p class='php'>Username už je obsazeno</p>";
                        }
                    }
                    elseif(isset($validated_password) && $validated_password !== "null") {
                        if($validated_password == "len") {
                            echo "<p class='php'>Heslo musí mít minimálně 6 znaků</p>";
                        }else{
                            if($validated_password =="special") {
                            echo "<p class='php'>Heslo musí mít min. 1 speciální znak a min. 1 velké písmeno</p>";
                            }
                        }

                    }
                    elseif(isset($validated_email) && !$validated_email) {
                        if($validated_email == "taken") {
                            echo "<p class='php'>Email už je obsazený</p>";
                        
                        }elseif(!$validated_email) {
                            echo "<p class='php'>Email je ve špatném formátu</p>";
                        }
                    }

                    else {
                        if(isset($are_passwords_same)){
                            if($are_passwords_same === true) {
                                //nic
                            }else {
                                echo "<p class='php'>Hesla se neshodují</p>"; 
                            }
                    }
                }



                ?>
            </fieldset>
        </form>
    </div>
</body>
</html>
