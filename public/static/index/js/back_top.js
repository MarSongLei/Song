$(function () {
    // 返回顶部
    $(window).scroll(function () {
        var num=$(window).scrollTop();
        num>900?$(".toTop").fadeIn():$(".toTop").fadeOut();
    })
    $(".toTop").click(function () {
        $("body,html").animate({
            scrollTop:0
        },400);
    })
})