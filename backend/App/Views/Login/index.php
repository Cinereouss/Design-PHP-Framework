<?php
if(isset($_SESSION['username'])){
    header('Location: Home');
}
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/css/bootstrap.min.css">
    <link rel="stylesheet" href="./public/css/signin.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:100,300,400,700&amp;amp;subset=latin-ext,vietnamese">

    <link rel="icon" type="image/png" sizes="16x16" href="./public/image/logo.png">

    <title>Guitar-H2D | Bán guitar uy tín</title>
</head>
<body class="text-center">

<div class="container">
    <div class="row">

        <div class="login-left col-xl-6 col-lg-6 col-md-6 d-none d-md-block">
            <img src="./public/image/login-decor-1.svg" alt="login-decor">
        </div>

        <div class="login right col-12 col-lg-6 col-md-6 col-sm-12">
            <form class="form-signin" method="POST" action="Login/login">
                <img class="mb-4" src="./public/image/logo.png" alt="logo" width="72" height="72">
                <h1 class="h3 mb-3 font-weight-normal">Đăng nhập để tiếp tục</h1>
                <input type="username" id="inputEmail" class="form-control" name="username" placeholder="Tên tài khoản" required autofocus>
                <input type="password" id="inputPassword" class="form-control" name="password" placeholder="Mật khẩu" required>

                <div class="checkbox">
                    <label>
                        <input type="checkbox" value="remember-me"> Remember me
                    </label>
                </div>
                <button class="btn btn-lg btn-secondary btn-block" name="btnLogin" type="submit">Sign In</button>
                <div class="mt-1 mb-1">
                    <label>
                        Don't have an account ? <a href="Signup" target="_self">Sign Up</a>
                    </label>
                </div>
                <p class="mt-2 mb-2 text-muted">Design by H2D 2020 &copy;</p>
            </form>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="./public/js/bootstrap.bundle.min.js"></script>
<script src="./public/js/javascript.js"></script>
<script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>
</body>
</html>
