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