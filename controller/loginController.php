<?php 

if(isset($_POST["username"]) && isset($_POST["password"])){
    $username = $connection->real_escape_string($_POST["username"]);
    $password = $connection->real_escape_string($_POST["password"]);

    $secure_password = md5($password);

    $result = $connection->query("SELECT * FROM `users` WHERE `username` = '$username' AND `password` = '$secure_password'");
    $user_count = $result->num_rows;

    if($user_count > 0){
        $user = $result->fetch_assoc();
    
        $_SESSION["status"] = true;
        $_SESSION["username"] = $username;
        $_SESSION["user_id"] = $user["id"];
        header("location:/blog_system/");
    }else{
        echo "Login failed";
    }
} else{
    echo "Invalid username or password";
}
?>