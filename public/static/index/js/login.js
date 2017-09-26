$(function () {
    // 头部导入
    $("#header").load("header.html");
    // 底部导入
    $("#footer").load("footer.html");
    //验证姓名


$(".login_content").click(function(){

    var telephone=$("#phoneNumbe").val();

    var telephone1=/^[1]{1}[0-9]{10}/;

    if(telephone.length==''){

        $("#login_tex").css("display","block");

        return false;
    }

        else{ // else if(!telephone1.test(telephone)){
        //     $("#login_tex").html("* 电话格式不正确");
        // }

        $("#login_tex").css("display","none");
    }
    //密码
    var password=$("#password").val();

    var password1=/^[0-9]{6,10}/;

    if(password.length==0){

        $("#login_tex").css("display","block");

        return false;

    }else if(!password1.test(password)){

        $("#login_tex").css("display","block");

        return false;
    }else{
        $("#login_tex").css("display","none");
    }
});
});
