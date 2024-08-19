<?php
include "header.php";
require "controller/blogCategory.php";

error_reporting(E_ALL);
ini_set('display_errors', 1);

?>


    <title>Manage Categories</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            margin-top: 50px;
        }
    </style>
</head>
<body>

<div class="container">
    <h2 class="text-center">Manage Categories</h2>

    <!-- Form to add new category -->
    <form action="/blog_system/addCategory" method="POST" class="mb-4">
    <div class="form-group">
        <label for="category_name">Category Name</label>
        <input type="text" class="form-control" id="category_name" name="category_name" placeholder="Enter category name" required>
    </div>
    <button type="submit" class="btn btn-primary">Add Category</button>
</form>

    <!-- Display categories -->
    <h4>Existing Categories</h4>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($categories) {
                foreach ($categories as $category) {
                    echo "<tr>
                            <td>{$category['id']}</td>
                            <td>{$category['name']}</td>
                            <td>
                                <a href='/blog_system/deletecategory?id={$category['id']}' class='btn btn-danger btn-sm'>Delete</a>
                            </td>
                          </tr>";
                }
            } else {
                echo "<tr><td colspan='3'>No categories found</td></tr>";
            }
            ?>
        </tbody>
    </table>
</div>

<?php include "footer.php"; ?>
