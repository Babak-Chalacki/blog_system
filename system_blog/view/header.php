<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>صفحه اصلی وبلاگ</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>    <!-- FontAwesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet">
    <style>
        body {
            direction: rtl;
            text-align: right;
        }
        .post {
            margin-bottom: 30px;
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 15px;
        }
        .search-bar {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

<header class="bg-primary text-white text-center py-4">
    <h1>وبلاگ من</h1>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">خانه</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
    <?php if(isset($_SESSION["status"]) && $_SESSION["status"] === true): ?>
        <li class="nav-item">
            <a class="nav-link" href="#"><?php echo $_SESSION["username"]; ?></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/blog_system/logout">خروج از حساب کاربردی</a>
        </li>
    <?php else: ?>
        <li class="nav-item">
            <a class="nav-link" href="/blog_system/login">ورود</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/blog_system/register">ثبت نام</a>
        </li>
    <?php endif; ?>
    <li class="nav-item">
        <a class="nav-link" href="/blog_system/blogs">ایجاد مقاله جدید</a>
    </li>
</ul>
        </div>
    </nav>
</header>

