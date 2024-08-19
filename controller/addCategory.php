<?php

  $category_name = $_POST["category_name"];

    $sql = "INSERT INTO `categories`(`name`) VALUES ('$category_name')";

    if ($connection->query($sql) === TRUE) {
        header("Location: /blog_system/managecategory");
        exit();
    } else {
        header("Location: /blog_system/managecategory" . $connection->error);
        exit();
    }


?>