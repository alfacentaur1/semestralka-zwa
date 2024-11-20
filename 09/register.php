<?php

    //VSE VALIDOVAT
    $_GET;
    $_POST;
    $_FILES;

    //include - pokračuje
    //require - při chybě spadne

    require "functions.php";
    $zajmy = [];


    // var_dump($_POST); //vypise post

    //validace
    //vzdycky submit a input text pole se vzdy posle 
    //post je pole, tak pristoupime k hodnote

    if (isset($_POST["register"])) {
        // echo "submit formulare"; //kdyz byl submitnuty ->validace

        $name = $_POST["name"];
        $zajmy = $_POST["zajmy"];
        $name_valid = validate_name($name);
        $photo = $_FILES["photo"];

        $photo_valid = validate_photo($photo);

        if($name_valid && $photo_valid) {
            //ulozeni dat do db
            //posílá http hlavičku (nastavujeme ji)
            //http hlavička - location informace
            //presmerovani na jinou stranku 
            header("Location: welcome.php"); //dokud neni zadne echo, mezera, neda se pouzit
        }else {
            //musime uzivateli zobrazit error

        }
    } else {
        echo "prvni pristup"; //nebyl submitnuty - prvni pristup
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrace</title>
</head>
<body>
    <form action="" method="POST" enctype="multipart/form-data">
        <div>
            <label for="name">Jmeno</label>
            <!-- musime vracet spatne vyplnena policka predvyplnena -->
             <!-- cross site scripting htmlspecialchars($name) -->

    
            <input type="text" name="name" 
            <?php 
                if(isset($name)) {
                    echo "value='" .htmlspecialchars($name)."'";
                }
            ?>
            id="name">
            <?php
                if(isset($name_valid) && $name_valid == false) {
                echo "<span class='error'>jmeno je spatne zadano</span>";
                };
            ?>
        </div>
        <div>
            <h6>Zajmy</h6>
            <label >Hokej <input type="checkbox" 
            <?= in_array("hokej",$zajmy) ? "checked" : ""?>name="zajmy[]" 
            id="" value="hokej"></label>
            <label >PC <input type="checkbox" 
            <?= in_array("pc",$zajmy) ?>name="zajmy[]" 
            id="" value="hokej"></label>
            <label >Jidlo <input type="checkbox" 
            <?= in_array("hokej",$zajmy) ?>name="zajmy[]" 
            id="" value="hokej"></label>
            <label >Fotbal <input type="checkbox" 
            <?= in_array("hokej",$zajmy) ?>name="zajmy[]" 
            id="" value="hokej"></label>
        </div>
        <div>
            <label for="photo">foto</label>
            <input type="file" name="photo" id="photo">
            <?php
                if(isset($photo_valid) && $photo_valid == false) {
                echo "<span class='error'>foto je ve spatnem formatu</span>";
                };
            ?>
        </div>
        <input type="submit" value="registruj se" name="register">
    </form>
</body>
</html>