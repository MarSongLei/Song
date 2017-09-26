/**
 * Created by Administrator on 2017/9/22 0022.
 */
$(function () {
    $("#header").load("header.html");
    $("#footer").load("footer.html");

    var length,
        currentIndex = 0,
        interval,
        hasStarted = false, //是否已经开始轮播
        t = 2000; //轮播时间间隔
        length=$(".main_im").length;
        //将第一张以外的图片隐藏
        $(".main_im:not(:first)").hide();
        $(".check:eq(0)").addClass("check1");

    $('.check').hover(function(e) {
        stop();
        var preIndex = $(".check").filter(".check1").index();
        currentIndex = $(this).index();
        play(preIndex, currentIndex);
    }, function() {
        start();
    });

    /**
     * 从preIndex页翻到currentIndex页
     * preIndex 整数，翻页的起始页
     * currentIndex 整数，翻到的那页
     */
    function play(preIndex, currentIndex) {
        $('.main_im').eq(preIndex).fadeOut(500)
            .parent().children().eq(currentIndex).fadeIn(1000);
        $('.check').removeClass('check1');
        $('.check').eq(currentIndex).addClass('check1');
    }
    /**
     * 开始轮播
     */
    function start() {
        if(!hasStarted) {
            hasStarted = true;
            interval = setInterval(next, t);
        }
    }
    /**
     * 停止轮播
     */
    function stop() {
        clearInterval(interval);
        hasStarted = false;
    }
    //开始轮播
    start();


});
