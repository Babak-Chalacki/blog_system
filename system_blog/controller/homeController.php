<?php
// posts
$posts = $connection->query("SELECT 
    posts.id AS post_id,          
    posts.title AS post_title,
    posts.content AS post_content,
    users.username AS author,
    categories.name AS category_name
FROM posts
INNER JOIN users ON posts.user_id = users.id
INNER JOIN categories ON posts.category_id = categories.id;");
?>