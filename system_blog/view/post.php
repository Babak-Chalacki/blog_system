<?php 
// postController.php

error_reporting(E_ALL);
ini_set('display_errors', 1);


$postId = isset($_GET['id']) ? (int)$_GET['id'] : null; 

if ($postId !== null) {
    
    $stmt = $connection->prepare("SELECT 
        posts.id AS post_id,
        posts.title AS post_title,
        posts.content AS post_content,
        users.username AS author,
        categories.name AS category_name,
        posts.created_at
    FROM posts
    INNER JOIN users ON posts.user_id = users.id
    INNER JOIN categories ON posts.category_id = categories.id
    WHERE posts.id = ?");
    
    $stmt->bind_param("i", $postId);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $post = $result->fetch_assoc(); 
    } else {
        echo "مقاله‌ای با این شناسه پیدا نشد.";
        exit; 
    }
} else {
    echo "شناسه مقاله معتبر نیست.";
    exit; 
}
?>

    <title><?= htmlspecialchars($post['post_title']) ?></title>
    <?php include "header.php"; ?>

<div class="container mt-5">
    <h1><?= htmlspecialchars($post['post_title']) ?></h1>
    <p><strong>نویسنده:</strong> <?= htmlspecialchars($post['author']) ?></p>
    <p><strong>دسته‌بندی:</strong> <?= htmlspecialchars($post['category_name']) ?></p>
    <p><strong>تاریخ انتشار:</strong> <?= date('Y/m/d', strtotime($post['created_at'])) ?></p>
    <h2>محتوا</h2>
    <p><?= nl2br(htmlspecialchars($post['post_content'])) ?></p>
    <a href="index.php" class="btn btn-secondary">بازگشت به صفحه اصلی</a>
</div>
<?php include "footer.php"; ?>
