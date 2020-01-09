
$(document).ready( function(){

    let can = document.getElementById("sample1");
    let ctx = can.getContext("2d");

    const img = new Image();
    img.src = "../png/sample(1).png";
    //画面が読み込まれた際の処理
    img.onload = function() {
        ctx.drawImage(img,0,0,can.width, can.height);
        // ctx.fillStyle = 'rgb(255,255,0,0.4)';
        // ctx.fillRect(295, 62, 80, 10);
        // var check1 = ctx.fillRect(293, 62, 80, 10);
        $('.ordering_company').css('background-color', 'yellow');
    }
    $(function(){
        $('.check1').on('click', function(event){
            $('.ordering_company').css('background-color', 'skyblue');
            $(this).val('確認済み');
            $('.delivery_place').css('background-color', 'yellow');
            document.getElementById('square1').style.backgroundColor = "rgb(137, 189, 222, 0.3)";
            $('.square2').show();
            // ctx.fillStyle = 'rgb(0,0,100,0.4)'; 
            // ctx.fillRect(295, 62, 80, 10);
            // ctx.fillStyle = 'rgb(255,255,100,0.4)';
            // ctx.fillRect(296, 52, 160, 10);
        });

        $(function(){
            $('.check2').on('click', function(event){
            $('.delivery_place').css('background-color', 'skyblue');
            document.getElementById('square2').style.backgroundColor = "rgb(137, 189, 222, 0.3)";

            $(this).val('確認済み');
            // $('.delivery_date').css('background-color', 'yellow');
            // ctx.fillStyle = 'rgb(100,100,200,0.4)'; 
            // ctx.fillRect(296, 52, 160, 10);
            // ctx.fillStyle = 'rgb(255,255,100,0.4)';
            // ctx.fillRect(30, 62, 80, 10);
            $('.square3').show();
            });
        });
        

        $(function(){
            $('.check3').on('click', function(event){
                $('.delivery_date').css('background-color', 'skyblue');
                document.getElementById('square3').style.backgroundColor = "rgb(137, 189, 222, 0.3)";

                $(this).val('確認済み');
                // $('.item-detail').css('background-color', 'yellow');
                // ctx.fillStyle = 'rgb(100,100,200,0.4)'; 
                // ctx.fillRect(30, 62, 80, 10);
                // ctx.fillStyle = 'rgb(255,255,100,0.4)';
                // ctx.fillRect(47, 115, 300, 55);
                $('.square4').show();
            });
        });


        $(function(){
            $('.check4').on('click', function(event){
                $('.item-detail').css('background-color', 'skyblue');
                document.getElementById('square4').style.backgroundColor = "rgb(137, 189, 222, 0.3)";

                $(this).val('確認済み');
                $('.invoice').css('background-color', 'yellow');
                // ctx.fillStyle = 'rgb(100,100,200,0.4)'; 
                // ctx.fillRect(47, 115, 300, 55);
            });
        });

        $(function(){
            $('.check5').on('click', function(event){
                $('.invoice').css('background-color', 'skyblue');
                $(this).val('確認済み');
            });
        });
    });
});

//クリックされた時の処理
// ctx.fillRect(0, 62, 80, 10);
        // ctx.fillRect(53, 63, 85, 10);
        // ctx.fillRect(47, 115, 300, 55);
        // ctx.fillRect(295, 62, 80, 10);

///////////////////////////////
//memo
// var location = document.getElementById("sample1")
        // console.log( location);
        // document.getElementById("sample1").addEventListener( "click", function( event ) {
        //     var x = event.pageX ;
        //     var y = event.pageY ;
        //     console.log(x-21);
        //     console.log(y-68);
        // } ) ;

        // $('#canvas').addEventListener("click", function(event) {
        //     console.log('screen=' + e.screenX + ',' + e.screenY);
        //     console.log('page=' + e.pageX + ',' + e.pageY);
        //     console.log('client=' + e.clientX + ',' + e.clientY);
        //     console.log('offset=' + e.offsetX + ',' + e.offsetY);
        //   });