<?php
    require "functions.php";

    if(isset($_POST["submit"])) {
        $data = [
            'lokalita' => $_POST["lokalita"],
            'cena' => $_POST["cena"],
            'mena' => $_POST["mena"], 
            'rozmery' => $_POST["rozmery"],
            'popis' => $_POST["popis"],
            'prodej' => $_POST["prodej"],
        ];

        $validate_all = validate_all($data);
        $is_price_size_right_format = price_size_check($_POST["cena"],$_POST["rozmery"]);
    }

?>



<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/addform.css">
    <link rel="stylesheet" href="css/univerzal.css">
    <title>Upravit příspěvek</title>
</head>
<body>
<?php require "nav.php" ?>
    <h2 >Upravení inzerátu</h2>
    <?php 
        if (isset($validate_all) && !$validate_all) {
            echo "<p class='php'>Všechna pole musí být vyplněna</p>";
        } 
        if (isset($is_price_size_right_format) && !$is_price_size_right_format) {
            echo "<p class='php'>Cena a rozměry musí být číslo větší než 0</p>";
        }
    
    
    ?>
    <div class="form-1">
        <form action="" method="POST" enctype="multipart/form-data">
            <fieldset>
                <div class="form">
                    <label for="lokalita">Lokalita</label>
                    <input type="text" name="lokalita" id="lokalita"
                    <?php
                        if(isset($_POST["lokalita"])){
                            echo "value='" .htmlspecialchars($_POST["lokalita"])."'";
                        }
                    ?>>
                </div>
                <div class="form">
                    <div class="form" id="select">
                        <label for="cena">Cena</label>
                        <input type="text" name="cena" id="cena"
                        <?php
                        if(isset($_POST["cena"])){
                            echo "value='" .htmlspecialchars($_POST["cena"])."'";
                        }
                        ?>
                        >
                        <select name="mena" id="cena-input">
                        <option value="czk" <?php echo (isset($_POST['mena']) && $_POST['mena'] === 'czk') ? 'selected' : ''; ?>>czk</option>
                        <option value="eur" <?php echo (isset($_POST['mena']) && $_POST['mena'] === 'eur') ? 'selected' : ''; ?>>eur</option>
                        </select>
                    </div>
                <div class="form">
                    <label for="rozmery">Rozměry(m2)</label>
                    <input type="text" name="rozmery" id="rozmery" 
                    <?php
                    if(isset($_POST["rozmery"])){
                        echo "value='" .htmlspecialchars($_POST["rozmery"])."'";
                    }
                    ?> 
                    >
                </div>
                <div class="form">
                    <label for="popis" class="fieldset">Popis</label>
                    <textarea name="popis" id="popis" cols="94" rows="15">
                    <?php
                    if(isset($_POST["popis"])){
                        echo htmlspecialchars($_POST["popis"]);
                    }
                    ?>                     
                    </textarea>
                </div>
                <div class="form">
                     <label for="prodej">Chci</label>       
                     <select name="prodej" id="prodej" class="prodej">
                <option value="pronajimat" <?php echo (isset($_POST["prodej"]) && $_POST["prodej"] === "pronajimat") ? "selected" : ""; ?>>pronajímat</option>
                <option value="prodat" <?php echo (isset($_POST["prodej"]) && $_POST["prodej"] === "prodat") ? "selected" : ""; ?>>prodat</option>
            </select>

                </div>
                <div class="form">
                    <input type="submit" value="Přidat" class="submit" name="submit">
                </div>
                </div>
            </fieldset>
        </form>
    </div>
</body>
</html>