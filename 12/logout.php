<?php
    // TODO: destroy session
    session_start();
    $_SESSION["user"] = null;
    setcookie("PHPSSEID","",date()-1);
    header("Location: login.php");
?>