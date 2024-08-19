<?php
session_start();
// include "model/database.php"; عدم اتصال 
$connection = new mysqli("localhost", "root", "", "blog");

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

$connection->query("SET NAMES 'utf8'");
$request = $_SERVER["REQUEST_URI"];

// تجزیه URL و استخراج پارامترها
$parsedUrl = parse_url($request);
$queryParams = [];
if (isset($parsedUrl['query'])) {
    parse_str($parsedUrl['query'], $queryParams);
}

switch ($parsedUrl['path']) {
    case "/blog_system":
    case "/blog_system/":
    case "/blog_system/index.php":
    case "/blog_system/index.php/":
        require __DIR__ . "/view/index.php";
        break;

    case "/blog_system/register":
    case "/blog_system/register/":
        require __DIR__ . "/view/register.php";
        break;
    case "/blog_system/post":
    case "/blog_system/post/":
        require __DIR__ . "/view/post.php";
        break;
    case "/blog_system/login":
    case "/blog_system/login/":
        require __DIR__ . "/view/login.php";
        break;
    case "/blog_system/admin":
    case "/blog_system/adminlogin/":
    case "/blog_system/adminlogin":
        require __DIR__ . "/view/adminLogin.php";
        break;
    case "/blog_system/dashboard":
    case "/blog_system/dashboard/":
    case "/blog_system/dashboard":
        if (isset($_SESSION["status"]) && $_SESSION["status"] === true) {
        require __DIR__ . "/view/adminPage.php";
        }else{
            header("location:/blog_system/"); 
        }
        break;
    case "/blog_system/managecategory":
    case "/blog_system/managecategory/":
    case "/blog_system/managecategory":
        if (isset($_SESSION["status"]) && $_SESSION["status"] === true) {
        require __DIR__ . "/view/manageCategory.php";
        }else{
            header("location:/blog_system/"); 
        }
        break;
        
    case "/blog_system/blogs":
    case "/blog_system/blogs/":
        if (isset($_SESSION["status"]) && $_SESSION["status"] === true) {
            require __DIR__ . "/view/blogs.php";
        } else {
            $_SESSION["color"] = "danger";
            $_SESSION["message"] = "ابتدا ثبت نام انجام دهید";
            header("location:/blog_system/");
        }
        break; 

    case "/blog_system/logout":
    case "/blog_system/logout/":
        require __DIR__ . "/controller/logout.php";
        break;

    case "/blog_system/registerController":
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            require __DIR__ . "/controller/registerController.php";
        } else {
            require __DIR__ . "/view/error.php";
        }
        break;
    case "/blog_system/adminLoginController":
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            require __DIR__ . "/controller/adminLoginController.php";
        } else {
            require __DIR__ . "/view/error.php";
        }
        break;
    case "/blog_system/loginController":
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            require __DIR__ . "/controller/loginController.php";
        } else {
            require __DIR__ . "/view/error.php";
        }
        break;

    case "/blog_system/blogController":
    case "/blog_system/blogController/":
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            require __DIR__ . "/controller/blogController.php";
        } else {
            require __DIR__ . "/view/error.php";
        }
        break;
        
    case "/blog_system/addCategory":
    case "/blog_system/addCategory/":
                if ($_SERVER["REQUEST_METHOD"] === "POST") {
                    require __DIR__ . "/controller/addCategory.php"; 
                } else {
                    require __DIR__ . "/view/error.php"; 
                }
                break;
        
        

    case "/blog_system/post":
    case "/blog_system/post/":
        $postId = isset($queryParams['id']) ? (int)$queryParams['id'] : null; 
        // require __DIR__ . "/controller/postController.php"; 
        require __DIR__ . "/view/post.php";
        break;

    case "/blog_system/deletecategory":
    case "/blog_system/deletecategory/":
        $postId = isset($queryParams['id']) ? (int)$queryParams['id'] : null; 
        require __DIR__ . "/controller/deleteCategory.php"; 
        break;
    default:
        require __DIR__ . "/view/error.php";
        break;
}
?>
