<?php 

    //validace username

    function validate_username($username) {
        if(strlen($username) < 6) {
            return "len";
        }
        // if($username in db) {
        //     //username already in db
        // }

        //all is good
        else {return "good";}
    }

    //password validation

    function validate_password($password) {

        $has_no_big = true;
        $has_no_special = true;

        $big_letters = range('A', 'Z');
        $special_characters = ['!', '"', '#', '$', '%', '&', "'", '(', ')', '*', '+', ',', '-', '.', '/', ':', ';', '<', '=', '>', '?', '@', '[', '\\', ']', '^', '_', '{', '|', '}', '~'];

        $splitted_password = str_split($password);

        //loop in password for special and big letters
        foreach($splitted_password as $char) {
            if(in_array($char, $big_letters)) {
                $has_no_big = false;
            }
            if(in_array($char, $special_characters)) {
                $has_no_special = false;
            }
        }
        //no long enough password
        if(strlen($password) < 6) {
            return "len";
        } 
        //no special chars or big
        if ($has_no_big || $has_no_special) {
            return "special";
        }

        return true;

        
    }

    //validace shodnosti hesel
    function are_passwords_same($p1, $p2) {
        echo "hesla";
        if($p1===$p2) {
            return true;
        }else {
            return false;
        }
    }

    //validace emailu - validní - true, nevalidní - false
    function validate_email($email){
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return true;  
        } else {
            return false; 
        }
    }
    


    //validation in addform

    //inputy nejsou empty

    function validate_all($data) {
        foreach ($data as $key => $value) {
            if (empty($value)) {
                return false;
            }
        }
        return true;
    }
    

    //validace foto
    function is_right_format($photo) {
        if(($photo["type"] == "image/png"
        || $photo["type"] == "image/jpeg" )){
            return false;
        } else {
        return true;
        }
    }

    //validace cena
    function price_size_check($price,$size) {
        if(is_numeric($price) && $price > 0  && is_numeric($size) && $size >0){
            return false;
        }else {
            return true;
        }
    }
?> 