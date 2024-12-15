<?php
    require_once('_db_file.php');

    // hesla: koko:autobus24, lolo:lolo
    //echo password_hash('lolo', PASSWORD_DEFAULT);

    // TODO: check if user is logged in
    // TODO: authenticate user
    if(isset($_POST['submit'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        // TODO: check if user exists and password is correct
        $user = get_user($username);

        // var_dump($user);

        if($user) {
            if(password_verify($password,$user["password"])){
                session_start();
                $_SESSION["user"] = $user;
                header("Location: list.php");
                // $returnurl = isset($_POST["returnurl"])?$_POST["returnurl"];
                
            }else {
                $error = "uzivatelske jmeno a heslo se neshoduji";
            }
        }else {
            $error = "uzivatel nenalezen";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="" method="post">
        <?php
            // TODO: add returnurl to form
            //musime checknout jestli je to url
            if(isset($_GET["returnurl"])){
                echo "<input type='hidden' name='returnurl' value='".htmlspecialchars($_GET["returnurl"])."'";
            }
        ?>
        <div>
        <label>Username: <input autocomplete="off" type="text" value="" name="username"></label>
        </div>
        <div>
            <label>Password: <input type="password" name="password"></label>
        </div>
        <div class="error">
            <?php if(isset($error))
                echo '<p>'.$error.'</p>';
            ?>
        </div>
        <input type="submit" name="submit" value="Login">

</body>
</html>