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
    <div class="container-uzivatelu">
        <div class="uzivatel">
            <div class="uzivatel-text">
                <p class="underline">Uživatel</p>
                <p>Filip Kopecký</p>
            </div>
            <div class="form">
                <form action="#" method="post">
                    <label for="role-1">Role</label>
                    <select name="role" id="role-1">
                        <option value="admin">admin</option>
                        <option value="uzivatel">uživatel</option>
                    </select>
                </form>
            </div>
        </div>
        <div class="uzivatel">
            <div class="uzivatel-text">
                <p class="underline">Uživatel</p>
                <p>Filip Kopecký</p>
            </div>
            <div class="form">
                <form action="#" method="post">
                    <label for="role">Role</label>
                    <select name="role" id="role">
                        <option value="admin">admin</option>
                        <option value="uzvatel">uživatel</option>
                    </select>
                </form>
            </div>
        </div>
        <div class="uzivatel">
            <div class="uzivatel-text">
                <p class="underline">Uživatel</p>
                <p>Filip Kopecký</p>
            </div>
            <div class="form">
                <form action="#" method="post">
                    <label for="role-2">Role</label>
                    <select name="role" id="role-2">
                        <option value="admin">admin</option>
                        <option value="uzvatel">uživatel</option>
                    </select>
                </form>
            </div>
        </div>
        <div class="tlacitko">
            <input type="submit" value="potvrdit" class="submit" name="role">
        </div>
    </div>
</body>
</html>