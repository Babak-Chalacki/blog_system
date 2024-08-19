

<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    }
    $_SESSION["status"] = false;
    $_SESSION["color"] = "success";
    $_SESSION["message"] = "با موفقیت از حساب کاربری خود خارج شدید";

    header("Location: /blog_system/");
?>