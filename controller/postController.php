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
       header("location : /blog_system/post")
      
    } else {
        echo "مقاله‌ای با این شناسه پیدا نشد.";
    }
} else {
    echo "شناسه مقاله معتبر نیست.";
}
?>