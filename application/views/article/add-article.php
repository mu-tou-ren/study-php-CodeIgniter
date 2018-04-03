<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>首页</title>
    <link rel="stylesheet" href="/ci-demo/static/css/style.css">
    <link rel="stylesheet" href="/ci-demo/static/js/release/wangEditor.css">
    <script src="/ci-demo/static/js/release/wangEditor.js"></script>
</head>
<body>
    <header>
        <div class="user-name">
            <span>admin</span>
            <a href="" class="exit">退出</a>
        </div>
    </header>
    <nav>
        <ul>
            <li>
                <a href="">文章</a>
            </li>
        </ul>
    </nav>
    <div class="main-content">
        <div class="article-box">
            <form action="">
                <div class="form-group">
                    <input type="text" placeholder="请输入标题">
                </div>
                <div id="editor">
                    <p></p>
                </div>
                <div class="form-group">
                    <input type="text" placeholder="请填写作者">
                </div>
                <button type="submit" class="login_btn">提交</button>
            </form>

        </div>
    </div>
    <script type="text/javascript">
        var E = window.wangEditor;
        var editor = new E('#editor');
        editor.customConfig.uploadImgServer = '/ci-demo/index.php/oss'; // 上传图片到服务器
        editor.create();
    </script>
</body>
</html>