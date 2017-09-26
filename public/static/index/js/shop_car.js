/**
 * Created by Administrator on 2017/9/21 0021.
 */$(function () {
    $("#header").load("header.html");
    // 导入头部
    $("#footer").load("footer.html");
    //input点击全选所有
    $(function () {
        $("#checkAll").click(function () {
            $('input[name="selectAll"]').attr("checked", this.checked);
        });
        var $selectAll = $("input[name='selectAll']");
        $selectAll.click(function () {
            $("#checkAll").attr("checked", $selectAll.length == $("input[name='selectAll']:checked").length ? true : false);
        });
    });
/*
    // 导入底部
    /!*商品数量框输入*!/
    function keyup() {
        var a_inp = document.getElementById("a_inp").value;
        if (isNaN(a_inp) || parseInt(a_inp) != a_inp || parseInt(a_inp) < 1) {
            a_inp = 1;
            return;
        }
        if (a_inp >= 10) {
            document.getElementById("a_inp").value = a_inp.substring(0, a_inp.length - 1);
            alert("商品数量不能大于10");
        }
    }

    /!*商品数量+1*!/
    $(".a_sp").click(function () {
        var a_inp = document.getElementById("a_inp").value;
        var a_sp = parseInt(a_inp) + 1;
        var price = document.getElementById("t_three").innerHTML;
        if (a_inp == "") {
            a_sp = 1;
        }
        if (a_sp >= 10) {
            document.getElementById("a_inp").value = a_sp - 1;
            alert("商品数量不能大于10");
        } else {
            document.getElementById("a_inp").value = a_sp;
            var Num = price * a_sp;
            document.getElementsByClassName("price").innerHTML = Num.toFixed(2);
        }
    })


    /!*商品数量-1*!/
    $(".a_sb").click(function () {
        var a_inp = document.getElementById("a_inp").value;
        var a_sb = parseInt(a_inp) + 1;
        var price = document.getElementsByClassName("t_three").innerHTML;
        if (a_inp == "") {
            a_sb = 1;
        }
        if (a_sb >= 10) {
            document.getElementById("a_inp").value = a_sb - 1;
            alert("商品数量不能大于10");
        } else {
            document.getElementById("a_inp").value = a_sb;
            var Num = price * a_sb;
            document.getElementById("price").innerHTML = Num.toFixed(2);
        }
    })
    function show() {
        document.getElementById("price").innerHTML = 3.25 * 3;
    }*/
});
