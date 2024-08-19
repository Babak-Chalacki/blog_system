
<title>ورود</title>
<?php include "header.php" ?>
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

    <div class="container">
        <h2 class="form-title text-center">ورود به حساب کاربری</h2>
        <form action="/blog_system/loginController" method="POST">
            <div class="form-group">
                <label for="username">نام کاربری</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                    </div>
                    <input type="text" class="form-control" id="username" name="username" placeholder="نام کاربری" required>
                </div>
            </div>
            <div class="form-group">
                <label for="password">رمز عبور</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-lock"></i></span>
                    </div>
                    <input type="password" class="form-control" id="password" name="password" placeholder="رمز عبور" required>
                </div>
            </div>
            <button type="submit" class="btn btn-primary btn-block">ورود</button>
        </form>
        <p class="text-center mt-3">هنوز حساب کاربری ندارید؟ <a href="register.html">ثبت‌نام کنید</a></p>
    </div>

  <?php include "footer.php" ?>