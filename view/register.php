
    <title>ثبت نام</title>
    <?php include "header.php"; ?> 
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
        <h2 class="form-title text-center">فرم ثبت‌نام</h2>
        <form action="/blog_system/registerController" method="POST">
        <div class="form-group">
                <label for="username">نام کاربری</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                    </div>
                    <input type="text" class="form-control" id="username" name="username" placeholder="نام کاربری" >
                </div>
            </div>
            <div class="form-group">
                <label for="fullname">نام و نام خانوادگی</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                    </div>
                    <input type="text" class="form-control" id="fullname" name="fullname" placeholder="نام و نام خانوادگی" >
                </div>
            </div>
            <div class="form-group">
                <label for="email">ایمیل</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                    </div>
                    <input type="email" class="form-control" id="email" name="email" placeholder="ایمیل" >
                </div>
            </div>
            <div class="form-group">
                <label for="password">رمز عبور</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-lock"></i></span>
                    </div>
                    <input type="password" class="form-control" id="password" name="password" placeholder="رمز عبور" >
                </div>
            </div>
            <div class="form-group">
                <label for="confirm_password">تأیید رمز عبور</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-lock"></i></span>
                    </div>
                    <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="تأیید رمز عبور" >
                </div>
            </div>
            <button type="submit" class="btn btn-primary btn-block">ثبت‌نام</button>
        </form>
        <p class="text-center mt-3">قبلاً ثبت‌نام کرده‌اید؟ <a href="login.php">وارد شوید</a></p>
    </div>

    <?php include "footer.php"; ?> 
