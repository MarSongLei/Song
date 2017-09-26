$(function () {
    $("#header").load("header.html");
    $("#footer").load("footer.html");
//    手机号验证/*
    $("#form1").submit(function(){
        var telephone=$("#phoneNumber").val();
           var telephone1=/^[1]{1}[0-9]{10}/;
         if(telephone.length==0){
                   $(".red").html("* 电话不可以为空");
                  return false;
             }else if(!telephone1.test(telephone)){
                 $(".red").html("* 电话格式不正确");
             }else{
                $(".red").html("输入正确");
             }
        //密码
        var password=$("#password").val();
        var password1=/^[a-z0-9A-z]{6,10}/;
        if(password.length==0){
            $(".red2").html("* 密码不可以为空");
            return false;
        }else if(!password1.test(password)){
            $(".red2").html("* 请输入6-10位的数字、字母密码");
            return false;
        }else{
            $(".red2").html("输入正确");
        }
        //二次输入密码
        var password2=$("#passwordSure").val();
        if(password2!=password){
            $(".red3").html("* 两次密码不一致");
            return false;
        }else{
            $(".red3").html("输入正确");
        }
    });
    //验证密码强度
    $(document).ready(function(){
        $("#password").keyup(function(){
            var textMax=20;
            $("#password").attr("maxlength",textMax);
            var len=$("#password").val().length;
            var boxlen=$(".box").css("width");

            var inputlength=$("#password").val().length;
            var bgwidth=(inputlength/textMax)*parseInt(boxlen);
            $(".bg").css("width",bgwidth);
            if(bgwidth<60)
            {
                $(".bg").css("background-color","#F00");
                $(".btex").html("弱");
                $(".btex").css("color","red")
            }
            else if(60<=bgwidth && bgwidth<120)
            {
                $(".bg").css("background-color","#F90");
                $(".btex").html("中");
                $(".btex").css("color","#F90")

            }
            else if(bgwidth>=120)
            {
                $(".bg").css("background-color","#6F3");
                $(".btex").html("强");
                $(".btex").css("color","#6F3")
            }
        })
    })
});
