<?php
    require "functions.php";
    //TODO
    // pres session user id
    //
    if(isset($_POST["submit"])) {
        $ad_id = $_POST["ad_id"];
        $data = [$ad_id  =>[
            "lokalita" => $_POST["lokalita"],
            "cena" => $_POST["cena"],
            "mena" => $_POST["mena"],
            "rozmery" => $_POST["rozmery"],
            "popis" => trim($_POST["popis"]),
            "prodej" => $_POST["prodej"],
            // "user_id" => $_POST["user_id"]
        
            ]
        ];

         $validate_all = validate_all($data);
         $is_price_size_right_format = price_size_check($_POST["cena"],$_POST["rozmery"]);
    
    $errors = [];
    $ads = loadAds();

    //hledame errory
    if (isset($validate_all) && !validate_all($data)) {
        $errors[] = "Všechna pole musí být vyplněna.";
    }
    if (isset($is_price_size_right_format) && !price_size_check($_POST["cena"], $_POST["rozmery"])) {
        $errors[] = "Cena a rozměry musí být čísla větší než 0.";
    }

    if(empty($errors)) {
        //tak to pridame do databaze
    }
}
    if (isset($_GET["id"])) {
        $my_id = $_GET["id"];
        $ad_data = null;
    
        foreach ($ads as $ad) {
            if (isset($ad[$my_id])) {
                $ad_data = $ad[$my_id]; 
                break;
            }
        }
    
        if ($ad_data) {
            // prelinkujeme array
            $lokalita = $ad_data["lokalita"];
            $cena = $ad_data["cena"];
            $mena = $ad_data["mena"];
            $rozmery = $ad_data["rozmery"];
            $popis = $ad_data["popis"];
            $prodej = $ad_data["prodej"];
        } else {
            // klic neexistuje
            echo "<p class='php'>Inzerát s ID $my_id nebyl nalezen.</p>";
            $lokalita = $cena = $mena = $rozmery = $popis = $prodej = "";
        }
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
    if(isset($errors)){
        foreach($errors as $error){
            echo "<p class='php'>$error</p>";
        }
}
    
    
    ?>
    <div class="form-1">
        <form action="" method="POST" enctype="multipart/form-data">
            <fieldset>
                <div class="form">
                    <input type="hidden" name="ad_id" id=<?php echo isset($_GET['id']) ? htmlspecialchars($_GET['id']) : ''; ?>
  
                    >
                    <label for="lokalita">Lokalita</label>
                    <input type="text" name="lokalita" id="lokalita"
                    <?php
                        if(isset($_POST["lokalita"] )){
                            echo "value='" .htmlspecialchars($_POST["lokalita"])."'";
                        }elseif(isset($lokalita)) {
                            echo "value='" .htmlspecialchars($lokalita)."'";
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
                        }elseif(isset($cena)) {
                            echo "value='" .htmlspecialchars($cena)."'";
                        }
                        ?>
                        >
                        <select name="mena" id="cena-input">
                        <option value="czk" <?php echo (isset($_POST["mena"]) && $_POST["mena"] === "czk"|| isset($mena) && $mena == "czk")  ? "selected" : ""; ?>>czk</option>
                        <option value="eur" <?php echo (isset($_POST["mena"]) && $_POST["mena"] === "eur"|| isset($mena) && $mena == "eur") ? "selected" : ""; ?>>eur</option>
                        </select>
                    </div>
                <div class="form">
                    <label for="rozmery">Rozměry(m2)</label>
                    <input type="text" name="rozmery" id="rozmery" 
                    <?php
                    if(isset($_POST["rozmery"])){
                        echo "value='" .htmlspecialchars($_POST["rozmery"])."'";
                    }elseif(isset($rozmery)) {
                        echo "value='" .htmlspecialchars($rozmery)."'";
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
                    }elseif(isset($popis)) {
                        echo htmlspecialchars($popis);
                    }
                    ?>                     
                    </textarea>
                </div>
                <div class="form">
                     <label for="prodej">Chci</label>       
                     <select name="prodej" id="prodej" class="prodej">
                <option value="pronajimat" <?php echo (isset($_POST["prodej"]) && $_POST["prodej"] === "pronajimat"|| isset($prodej) && $prodej == "pronajimat") ? "selected" : ""; ?>>pronajímat</option>
                <option value="prodat" <?php echo (isset($_POST["prodej"]) && $_POST["prodej"] === "prodat" || isset($prodej) && $prodej == "pronajimat") ? "selected" : ""; ?>>prodat</option>
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