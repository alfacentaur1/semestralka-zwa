<?php
    $file = file_get_contents('data.json');
    $db = json_decode($file, true);
    //var_dump($db);

    function get_user($username) {
        global $db;
        foreach($db["users"] as $user){
            if($username == $user["user"]){
                return $user;
            }else {
                return null;
            }
        }
        
    }

    function get_notes($user_id) {
        // TODO
        
    }
?>