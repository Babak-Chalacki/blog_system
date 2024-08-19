<?php

if (isset($_GET['id'])) {
    $id = intval($_GET['id']); 

    $sql = "DELETE FROM categories WHERE id = $id";

    if ($connection->query($sql) === TRUE) {
        header("Location: /blog_system/managecategory");
        exit();
    } else {
        header("Location: manageCategory.php?message=Error deleting category: " . $connection->error);
        exit();
    }
} else {
    header("Location: /blog_system/managecategory");
    exit();
}

?>