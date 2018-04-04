/**
 * Created by ThinkPad on 2018/4/4.
 */
$(function () {
    $("#add_article_but").click(function(){
        window.location.href = "goarticleadd/";
    })

    $(".update_article_but").click(function(){
        window.location.href = "goArticleUpdate/" + $(this).attr("data-id");
    })

    $(".delete_article_but").click(function (){
        $.ajax({
            type: "get",
            url: "/ci-demo/index.php/article/articlecontroller/deleteArticle/" + $(this).attr("data-id"),
            cache: false,
            dataType: "json",
            success: function (data) {
                if(data){
                    alert("删除成功")
                    window.location.href = '/ci-demo/index.php/article/articlecontroller/';
                }else{
                    alert("删除失败");
                }
            }
        });
    })

    $("#article_add_but").click(function(){
        if(!$("#title").val()){
            alert("请填写文章title");
            return false;
        }
        if(!$("#content").val()){
            alert("请填写文章正文");
            return false;
        }
        if(!$("#author").val()){
            alert("请填写文章作者");
            return false;
        }
        $.ajax({
            type: "post",
            url: "/ci-demo/index.php/article/articlecontroller/" + (!$(this).attr("data-id") ? 'articleSave' : 'articleUpdate'),
            cache: false,
            dataType: "json",
            data: {
                id : !$(this).attr("data-id") ? '' : $(this).attr("data-id") ,
                title: $("#title").val(),
                content: $("#content").val(),
                author: $("#author").val()
            },
            success: function (data) {
                if(data){
                    window.location.href = '/ci-demo/index.php/article/articlecontroller/';
                }else{
                    alert("保存失败");
                }
            }
        });
    })
})
