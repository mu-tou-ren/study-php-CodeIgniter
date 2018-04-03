<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>登录</title>
    <link rel="stylesheet" href="/ci-demo/static/css/style.css">
</head>
<body>
<div class="container" style="height:450px;">
    <h2 class="text-center">品途商业评论</h2>
    <div class="main_content">
        <p class="text-center">用户登录</p>
        <form action="/ci-demo/index.php/usercontroller/login" method="post">
            <div class="form-group">
                <input type="text" class="login_input" name="username" id="Email1" placeholder="请输入用户名">
            </div>
            <div class="form-group">
                <input type="password" class="login_input" name="password" id="Password1" placeholder="请输入密码">
            </div>
            <button type="submit" class="login_btn">登 录</button>
        </form>
    </div><!--row end-->
</div>
</body>
<script>

</script>

</html>