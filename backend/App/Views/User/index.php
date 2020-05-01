<?php
if(isset($_SESSION['username'])){
    header('Location: Home');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>particles.js</title>
    <meta name="description" content="particles.js is a lightweight JavaScript library for creating particles.">
    <meta name="author" content="Vincent Garreau" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="stylesheet" href="/backend/App/Views/User/css/style.css">
</head>
<body>

<!-- count particles -->
<!-- particles.js container -->
<div class="form">
        <h1>User Login</h1>
        <div class="line"></div>
        <div class="form-inner">
            <label for="Username-label">Username</label><br/>
            <div class="space"></div>
            <input type="text" id="user" placeholder="username" required autofocus/><br/>
            <div class="space"></div>
            <label for="Username-label">Password</label><br/>
            <div class="space"></div>
            <input type="password" id="pass" placeholder="password" required/><br/>

            <button class="submit-btn" id="btn-login">Sign In</button>
        </div>
        <div class="space"></div>
        <p style=" margin-top: 40px ; color: white; text-align: center">&copy; 2020 Bài tập lớn  | Design by H2D</p>
</div>

<div id="particles-js"></div>
<!-- scripts -->
<script src="/backend/App/Views/User/particles.js"></script>
<script src="/backend/App/Views/User/js/app.js"></script>
<script src="./public/js/jquery.min.js"></script>
<script src="./public/js/bootstrap.bundle.min.js"></script>
<script src="./public/js/javascript.js"></script>
<!-- stats.js -->
<script src="/backend/App/Views/User/js/lib/stats.js"></script>

</body>
</html>
<script>
    $(document).ready(function () {
        $("#btn-login").on('click', function () {
            if($("#user").val()!='' && $("#pass").val()!=''){
                $('#btn-login').prop('disabled', true);
                var data = {
                    'btn-login' : true,
                    'username' : $("#user").val(),
                    'password' : $("#pass").val()
                };
                $.ajax({
                    type : 'POST',
                    url  : 'User/userLogin',
                    data : data,
                    success :  function(data)
                    {
                        console.log(data);
                        if(data === 'true')
                        {
                            location.reload();
                        }else{
                            alert('Thông tin đăng nhập không đúng');
                            $('#btn-login').prop('disabled', false);
                        }
                    }
                });
                return false;
            }else{
                alert("Vui lòng nhập đủ thông tin đăng nhập")
            }
        });
    })
</script>
