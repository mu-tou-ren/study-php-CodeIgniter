<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>登录</title>
    <link rel="stylesheet" href="/ci-demo/static/css/style.css">
    <script src="/ci-demo/static/js/common/jquery-1.11.3.min.js"></script>
    <script src="/ci-demo/static/js/login.js"></script>
</head>
<body>
<div class="container" style="height:450px;">
    <h2 class="text-center">品途商业评论</h2>
    <div class="main_content">
        <p class="text-center">用户登录</p>
        <form action="/ci-demo/index.php/usercontroller/login" method="post">
            <div class="form-group">
                <input type="text" class="login_input" name="username" id="username" placeholder="请输入用户名">
            </div>
            <div class="form-group">
                <input type="password" class="login_input" name="password" id="password" placeholder="请输入密码">
            </div>
            <button type="button" class="login_btn" id="login_btu">登 录</button>
        </form>
    </div><!--row end-->
</div>
</body>
<script>

</script>

</html>