<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>首页</title>
    <link rel="stylesheet" href="/ci-demo/static/css/style.css">
    <script src="/ci-demo/static/js/common/jquery-1.11.3.min.js"></script>
    <script src="/ci-demo/static/js/article.js"></script>

</head>
<body>
    <header>
        <div class="user-name">
            <span><?php echo $userdata ->username;?></span>
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
    <div><button type="button" class="add_article_but" id="add_article_but" data-id="">添加</button></div>
    <div class="main-content">
        <table>
            <thead>
                <th scope="col" width="30%">标题</th>
                <th scope="col" width="30%">正文</th>
                <th scope="col" width="30%">作者</th>
                <th scope="col" width="10%">操作</th>
            </thead>
            <tbody>
            <?php foreach ($articles as $article){?>
                <tr>
                    <td><?php echo $article['title']?></td>
                    <td><?php echo $article['content']?></td>
                    <td><?php echo $article['author']?></td>
                    <td>
                        <button class="font-btn del-btn">删除</button>
                        <button class="font-btn update_article_but" data-id="<?php echo $article['id']?>">修改</button>
                    </td>
                </tr>
                <?php }?>
            </tbody>
        </table>
    </div>
</body>
</html>