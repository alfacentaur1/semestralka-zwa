<?php
    require_once "_db_file.php";
?>


<!-- proc tam mame jako druhy parametr true - funkce vrati json objekty, a my tim true nastravime return na array -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
</head>
<body>
    <table>
    <thead>
        <tr>
            <td>id</td>
            <td>name</td>
        </tr>
    </thead>
    <?php 
    $users = listUsers($db);
    if ($users) {
        foreach($users as $user) {
            echo "<tr>";
            echo "<td>". htmlspecialchars($user['id'])."</td>";
            echo "<td>". htmlspecialchars($user['name'])."</td>";
            echo "</tr>";
        }
    }else{
        echo "user nenalezen";
    }
        


    
    
    ?>
    </table>
</body>
</html>
