
<?php include "header.php" ?>
    <title>Admin Dashboard - Blog Management</title>

    <style>
        body {
            background-color: #f8f9fa;
        }
        .sidebar {
            background-color: #343a40;
            color: white;
            height: 100vh;
        }
        .sidebar a {
            color: white;
        }
        .sidebar a:hover {
            background-color: #495057;
        }
        .content {
            padding: 20px;
        }
    </style>
</head>
<body>

<div class="d-flex">
    <!-- Sidebar -->
    <nav class="sidebar p-3">
        <h2 class="text-center">Admin Panel</h2>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link active" href="#manage-posts" data-toggle="tab"><i class="fas fa-pencil-alt"></i> Manage Posts</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/blog_system/managecategory" data-toggle="tab"><i class="fas fa-tags"></i> Manage Categories</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#manage-comments" data-toggle="tab"><i class="fas fa-comments"></i> Manage Comments</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#settings" data-toggle="tab"><i class="fas fa-cog"></i> Settings</a>
            </li>
        </ul>
    </nav>

    <!-- Main Content -->
    <div class="content col-md-9">
        <div class="tab-content">
            <!-- Manage Posts Tab -->
            <div class="tab-pane fade show active" id="manage-posts">
                <h3>Manage Blog Posts</h3>
                <a style="text-decoration:none; color:white;" href="/blog_system/blogs"> <button class="btn btn-primary mb-3" data-toggle="modal" ><i class="fas fa-plus"></i> Add New Post</button></a>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Author</th>
                            <th>Date</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Sample Blog Post</td>
                            <td>Admin</td>
                            <td>2024-08-19</td>
                            <td>
                                <button class="btn btn-warning btn-sm"><i class="fas fa-edit"></i> Edit</button>
                                <button class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Delete</button>
                            </td>
                        </tr>
                        <!-- More rows can be added dynamically -->
                    </tbody>
                </table>
            </div>

            <!-- Manage Categories Tab -->
            <div class="tab-pane fade" id="manage-categories">
                <h3>Manage Categories</h3>
                <button class="btn btn-primary mb-3" data-toggle="modal" data-target="#addCategoryModal"><i class="fas fa-plus"></i> Add New Category</button>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Category Name</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Technology</td>
                            <td>
                                <button class="btn btn-warning btn-sm"><i class="fas fa-edit"></i> Edit</button>
                                <button class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Delete</button>
                            </td>
                        </tr>
                        <!-- More rows can be added dynamically -->
                    </tbody>
                </table>
            </div>

            <!-- Manage Comments Tab -->
            <div class="tab-pane fade" id="manage-comments">
                <h3>Manage Comments</h3>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Comment</th>
                            <th>Author</th>
                            <th>Post</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>This is a comment.</td>
                            <td>User1</td>
                            <td>Sample Blog Post</td>
                            <td>
                                <button class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Delete</button>
                            </td>
                        </tr>
                        <!-- More rows can be added dynamically -->
                    </tbody>
                </table>
            </div>

            <!-- Settings Tab -->
            <div class="tab-pane fade" id="settings">
                <h3>Settings</h3>
                <p>Settings content goes here.</p>
            </div>
        </div>
    </div>
</div>

<!-- Modal for Adding New Post -->
<div class="modal fade" id="addPostModal" tabindex="-1" aria-labelledby="addPostModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addPostModalLabel">Add New Post</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span>&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="postTitle">Title</label>
                        <input type="text" class="form-control" id="postTitle" placeholder="Enter post title" required>
                    </div>
                    <div class="form-group">
                        <label for="postContent">Content</label>
                        <textarea class="form-control" id="postContent" rows="5" placeholder="Enter post content" required></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save Post</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal for Adding New Category -->
<div class="modal fade" id="addCategoryModal" tabindex="-1" aria-labelledby="addCategoryModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addCategoryModalLabel">Add New Category</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span>&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="categoryName">Category Name</label>
                        <input type="text" class="form-control" id="categoryName" placeholder="Enter category name" required>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save Category</button>
            </div>
        </div>
    </div>
</div>
<?php include "footer.php" ?>