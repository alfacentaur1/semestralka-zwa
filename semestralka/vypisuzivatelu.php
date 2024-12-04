<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Výpis uživatelů</title>
    <link rel="stylesheet" href="css/vypisuzivatelu.css">
    <link rel="stylesheet" href="css/univerzal.css">
</head>
<body>
<?php require "nav.php" ?>
<div class='container-uzivatelu'>
<div class='form'>
<form action='#' method='post'>
<?php 

require "functions.php";

$users = loadUsers();

foreach ($users as $user) {
    $username = htmlspecialchars($user["username"]); // Escapování výstupu
    $role = htmlspecialchars($user["role"]); // Escapování výstupu

    echo "
    <div class='container-uzivatelu'>
        <div class='uzivatel'>
            <div class='uzivatel-text'>
                <p class='underline'>Uživatel</p>
                <p>$username</p>
            </div>

                    <label for='role-$username'>Role</label>
                    <select name='role' id='role-$username'>
                        <option value='admin' " . ($role == 'admin' ? 'selected' : '') . ">admin</option>
                        <option value='uzivatel' " . ($role == 'uzivatel' ? 'selected' : '') . ">uživatel</option>
                    </select>

    ";
}
?>
</form>
</div>
<div class='tlacitko'>
<input type='submit' value='potvrdit' class='submit'>
</div>
</div>


    
</body>
</html>