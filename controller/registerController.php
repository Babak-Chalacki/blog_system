<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);


$username = $_POST["username"];
$fullname = $_POST["fullname"];
$email = $_POST["email"];
$password = $_POST["password"];
$confirm_password = $_POST["confirm_password"];

$get_username = $connection->query("SELECT * FROM users WHERE `username` = '$username'");
$get_email = $connection->query("SELECT * FROM users WHERE `email` = '$email'");

if ($password == $confirm_password) {
    $securePassword = md5($password); 

    if ($get_username->num_rows > 0 || $get_email->num_rows > 0) {
        echo "Username or email already exists";
        $_SESSION["color"] = "danger";
        $_SESSION["message"] = "نام کاربری یا ایمیل از پیش موجود است";
        header("Location: /blog_system/");
    } else {
        if (strlen($password) > 5) {
            $new_user = $connection->query("INSERT INTO users(`username`,`fullname`,`email`,`password`) VALUES('$username','$fullname','$email','$securePassword')");
        
            if ($new_user) {
                $user_id = $connection->insert_id; 
        
                $_SESSION["color"] = "success";
                $_SESSION["message"] = "با موفقیت ثبت نام شدید";
                $_SESSION["status"] = true;
                $_SESSION["username"] = $username;
                $_SESSION["user_id"] = $user_id; 
        
                header("Location: /blog_system/");
                exit();
            } else {
                echo "Error: " . $connection->error;
            }
        } else {
            $_SESSION["color"] = "danger";
            $_SESSION["message"] = "رمز عبور باید بیش از ۵ کاراکتر باشد";
            header("Location: /blog_system/");
            echo "your password is too short";
        }}
} else {
    echo "Passwords do not match";
    $_SESSION["color"] = "danger";
    $_SESSION["message"] = "عدم تطابق رمزعبور با تکرار آن";
    header("Location: /blog_system/");
    exit();
}
?>