<?php
    require "functions.php";
    $users = loadUsers();
    if (isset($_POST["submit"])) {
        foreach ($users as &$user) { // Použijeme referenci, aby se změny projevily přímo v poli
            if (isset($user["username"]) && isset($_POST[$user["username"]] )) {
                $user["role"] = $_POST[$user["username"]];
            }
        }
        saveRoles($users); // Uložíme až po ukončení cyklu
    }
?>

<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Výpis uživatelů</title>
    <link rel="stylesheet" href="css/vypisuzivatelu.css">
    <link rel="stylesheet" href="css/univerzal.css">
    <script src="ajax.js"></script>
</head>
<body>
<?php require "nav.php" ?>
<div id='container-uzivatelu'>
<div class='form'>
<form action='vypisuzivatelu.php' method='post'>
<?php 





foreach ($users as $user) {
    $username = htmlspecialchars($user["username"]); // Escapování výstupu
    $role = htmlspecialchars($user["role"]); // Escapování výstupu

    echo "

        <div class='uzivatel'>
                <p class='underline'>" . ($role == 'admin' ? 'admin' : 'uživatel') . "</p>
                <p>$username</p>


                    <label for='$username'>Role</label>
                    <select name='$username' id='role'>
                        <option value='admin' " . ($role == 'admin' ? 'selected' : '') . ">admin</option>
                        <option value='uzivatel' " . ($role == 'uzivatel' ? 'selected' : '') . ">uživatel</option>
                    </select>
        </div>
    ";
}
?>


<div class='tlacitko'>
<input type='submit' value='potvrdit' class='submit' name="submit">
</form>
</div>
</div>


    
</body>
</html>