<?php

    // kdyz smazu uzivatele -> smazou se jeho prispevky
    //
    //
    //
    //
    //
    //
    //
    //
    define("DB_FILE_NAME","users.json");
    $file = file_get_contents("DB_FILE_NAME");
    if (!isset($file)) {
        //neco
    }
    //var_dump($file)
    //kdyz neni parametr true - neni to datovy typ array, ale datovy typ object
    $db = json_decode($file,true);
    if(!isset($db)) {
        //tak neco
    }
    function saveDB($file) {
        //global $db;
        $json = json_encode($file);

        $result = file_put_contents("DB_FILE_NAME",$json);


    }
    //vypis popis
    function listUsers($db,$offset,$limit) {
        // global $db;
        //slice() == vracime podcast
        return $db;
    }

    function getUser($id,$users) {
        foreach ($users as $user) {
            if ($user['id'] == $id){
                return $user;
            }
        }
        return null;
    }

    function addUser($name,$email,$avatar){
        global $db;
        $id = uniqid();
        // $error = "";
        // foreach ($file as $data) {
        //     if ($data["email"] == $email) {
        //         $error = $error."email obsazeny";

        //     }
        //validaci udelam na formulari, ne tady
            $user = [
                "id" => $id,
                "name" => $name,
                "email" => $email,
                "avatar" => $avatar
            ];
            $db[] = $user ;
            saveDB($db);
            return $id;
        }

        addUser("filip","123","ahoj");

    function deleteUser($id){
        global $db;
        foreach($db as $index => $user) {
            if ($id == $user["id"]) {
                unset($db[$index]);
                saveDB($db);
                return true;
            }

        }
        return false;
    }
    function editUser($id, $name, $email, $avatar) {
        global $db; //$db = users.json
        foreach($db as $user) {
            if ($id == $user["id"]) {
                $user["name"] = $name;
                $user["email"] = $email;
                $user["avatar"] = $avatar;
                saveDB($db);
                return true;
            }
        }return false;
    }
?>
    