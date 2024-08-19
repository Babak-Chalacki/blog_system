
    <title>ایجاد مقاله جدید</title>
    <?php include "header.php";
          require "controller/blogCategory.php";
                  error_reporting(E_ALL);
                  ini_set('display_errors', 1);
    ?>
    <style>
        body {
            direction: rtl;
            text-align: right;
            background-color: #f8f9fa;
        }
        .container {
            margin-top: 50px;
        }
        .form-title {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

    <div class="container">
        <h2 class="form-title text-center">ایجاد مقاله جدید</h2>
        <form action="/blog_system/blogController" method="POST">
            <div class="form-group">
                <label for="title">عنوان مقاله</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-heading"></i></span>
                    </div>
                    <input type="text" class="form-control" id="title" name="title" placeholder="عنوان مقاله" >
                </div>
            </div>
            <div class="form-group">
                <label for="content">محتوای مقاله</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-file-alt"></i></span>
                    </div>
                    <textarea class="form-control" id="content" name="content" rows="10" placeholder="محتوای مقاله" ></textarea>
                </div>
            </div>
            <div class="form-group">
                <label for="category">دسته‌بندی</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-tags"></i></span>
                    </div>
                    <select class="form-control" id="category" name="category" >
                        <option value="">انتخاب دسته‌بندی</option>
                        <?php foreach($categories as $category): ?>
                            <option value="<?=  $category["id"] ?>"><?= $category["name"] ?></option>
                            <?php endforeach; ?>
                    </select>
                </div>
            </div>
        <center>  
             <button type="submit" class="btn btn-primary btn-block mt-2">ایجاد مقاله</button>
        </center>
        </form>
        <p class="text-center mt-3"><a href="index.php">بازگشت به صفحه اصلی</a></p>
    </div>

<?php include "footer.php" ?>