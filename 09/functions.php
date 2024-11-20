<?php
//definice validačních funkcí

    function validate_name($name) {
        if(strlen($name) > 5) {
            return true;
        }else {
            return false;
        }
    }

    function validate_photo($photo) {
        if(($photo["type"] == "image/png"
        || $photo["type"] == "image/jpeg" )
        && $photo["size"] < 900000){
            return true;
    } else {
        return false;
    }
    }

?>