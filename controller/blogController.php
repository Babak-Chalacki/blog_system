

<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

    $title = isset($_POST["title"]) ? trim($_POST["title"]) : '';
    $content = isset($_POST["content"]) ? trim($_POST["content"]) : '';
    $category = isset($_POST["category"]) ? trim($_POST["category"]) : '';

    // بررسی خالی بودن مقادیر
    if (empty($title) || empty($content) || empty($category)) {
        echo "لطفاً همه فیلدها را پر کنید.";
    
    } else {
       
        
        $currentTime = date("Y-m-d H:i:s");
       
    $user_id = $_SESSION["user_id"];

    $new_blog = $connection->query("INSERT INTO `posts`(`title`, `content`, `user_id`, `category_id`, `updated_at`) VALUES ('$title','$content',$user_id,'$category','$currentTime')");
        $_SESSION["color"] = "success";
        $_SESSION["message"] = "مقاله شما با موفقیت ایجاد شد";
        header("Location: /blog_system/");
    }

?>