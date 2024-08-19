<?php

include "header.php"; 
require "controller/homeController.php";
?>



<?php
session_start();


if (isset($_SESSION["color"]) && isset($_SESSION["message"])): ?>
    <div class="container">
        <center>
            <div class="alert alert-<?php echo $_SESSION["color"] ?> alert-dismissible" style="width:300px;" role="alert">
                <span><?php echo $_SESSION["message"] ?></span> 
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" onclick="this.closest('.alert').remove();">
                </button>
            </div>
        </center>
    </div>
    <?php 
    // delete session details
    unset($_SESSION["color"]);
    unset($_SESSION["message"]);
endif; 
?>
<main class="container mt-4">
    <h2>آخرین مقالات</h2>
    <div class="search-bar">
        <form action="search.html" method="GET">
            <div class="input-group">
                <input type="text" class="form-control" name="query" placeholder="جستجو..." required>
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="submit"><i class="fas fa-search"></i></button>
                </div>
            </div>
        </form>
    </div>
    <div class="row">
    <?php foreach($posts as $post): ?>
    <div class="col-4"> <!-- هر مقاله در یک ستون 4 قرار می‌گیرد -->
        <div class="post">
            <h3><?= $post['post_title'] ?></h3>
            <p>نویسنده: <?= $post['author'] ?></p>
            <p>دسته‌بندی: <?= $post['category_name'] ?></p>
            <p>تاریخ انتشار: <?= date('Y/m/d', strtotime($post['created_at'])) ?></p>
            <center><button class="btn btn-primary"><a style="text-decoration:none; color:white;" href="/blog_system/post?id=<?= $post['post_id'] ?>">مشاهده مقاله</a></button></center>
        </div>
    </div>
<?php endforeach; ?>
</div>
</main>

<?php include "footer.php"; ?>