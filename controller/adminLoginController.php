<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$user_input = $_POST['username'];
$pass_input = $_POST['password'];
$securepassword  = md5($pass_input);
$sql = "SELECT role FROM users WHERE username='$user_input' AND password='$securepassword'";
$result = $connection->query($sql);


if ($result && $result->num_rows > 0) {

    $row = $result->fetch_assoc();
    $role = $row['role'];

   
    if ($role == 1) {
        $_SESSION["status"] = true;
        header("Location:/blog_system/dashboard");
        exit();
    } else {
        echo "شما دسترسی به این صفحه را ندارید."; 
    }
} else {
    echo "نام کاربری یا رمز عبور اشتباه است."; 
}


?>