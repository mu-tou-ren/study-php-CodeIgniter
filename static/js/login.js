/**
 * Created by ThinkPad on 2018/4/3.
 */

$(function(){
    $("#login_btu").click(function(){
        if(!$("#username").val()){
            alert("请填写用户名");
            return false;
        }
        if(!$("#password").val()){
            alert("请填写密码");
            return false;
        }
        $.ajax({
            type: "post",
            url: "logincontroller/login",
            cache: false,
            dataType: "json",
            data: {
                username: $("#username").val(),
                password: $("#password").val()
            },
            success: function (data) {
                if(data.success){
                    window.location.href = 'article/articlecontroller/';
                }else{
                    alert(data.message);
                }
            }
        });
    })
})
