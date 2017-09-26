$(function () {
    $("#header").load("header.html");
    // 导入头部
    $("#footer").load("footer.html");
    // 导入底部
    var i=0;
    var timer=setInterval(function () {
        i++;
        i=i>4?i=0:i;
        move(i);
    },4000);
    function move(index) {
        $(".progress").stop().animate({"left":index*240+"px"},1000);
        $(".banner_show a").stop(true).eq(index).fadeIn().siblings().fadeOut();
    }
    $(".btn>a").click(function () {
        clearInterval(timer);
        var index=$(this).index();
        i=index;
        move(index);
        timer=setInterval(function () {
            console.log(i);
            i++;
            i=i>4?i=0:i;
            move(i);
        },4000);
    })
    // 购买商品数量的增减按钮

     // 商品数量增加事件
    $(".addItem").click(function (event) {
        var a=parseInt($(this).siblings(".numItem").text());
        a++;
        if(a>0){
            $(this).siblings(".numItem").text(a).siblings(".surfaceItem").css({"background-image":"url(image/black_sbg.png)",opacity:1});
        }
        event.preventDefault();
    })
    // 商品数量减少事件
    $(".reduceItem").click(function (event) {
        event.preventDefault();
        var a=parseInt($(this).siblings(".numItem").text());
        a--;
        if(a<=0){
            a=0;
            $(this).siblings(".surfaceItem").css({"background-image":""});
        }
        $(this).siblings(".numItem").text(a);
    })

    // 商品小块移入事件
    $(".goodPicItem").hover(function () {
        $(this).find(".numItem").css("opacity","1");},function () {
        var a=parseInt($(this).find(".numItem").text());
        if(a<=0){
            $(this).find(".numItem").css("opacity","0");
        }
    })






})