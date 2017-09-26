$(function () {
    $("#header").load("header.html");
    // 导入头部
    $("#footer").load("footer.html");
    // 导入底部

    // function keyup(){
    //     var num_other = document.getElementById("num_other").value;
    //     if(isNaN(num_other) ||  parseInt(num_other)!=num_other || parseInt(num_other)<1){
    //         num_other = 1;
    //         return;
    //     }
    //     if(num_other>=10){
    //         document.getElementById("num_other").value=quantity.substring(0,num_other.length-1);
    //         alert("商品数量不能大于10");
    //     }
    // }

    /*商品数量+1*/
    $(".plus_other").click(function () {

        var num_other = document.getElementById("num_other").value;
        var plus_other = parseInt(num_other)+1;
        if(plus_other>=0){
            document.getElementById("num_other").value=num_dec;
            var Num=price*plus_other;
            document.getElementById("totalPrice").innerHTML=Num.toFixed(2);
        }
    });
    /*商品数量-1*/
    $(".minus_other").click(function () {
        var num_other = document.getElementById("num_other").value;
        var price=document.getElementById("price").value;
        var minus_other = parseInt(num_other)-1;
        if(minus_other>=0){
            document.getElementById("num_other").value=minus_other;
            var Num=price*minus_other;
            document.getElementById("totalPrice").innerHTML=Num.toFixed(2);
        }
    });

    function show()
    {
        document.getElementById("totalPrice").innerHTML=3.25*3;
    }

});
