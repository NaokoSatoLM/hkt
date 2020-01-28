
// $(document).ready( function(){

//     let target = document.getElementById('container');
//     target.addEventListener('click', getPosition);
//     console.log(target);
//     function getPosition(e) {
//         let offsetX = e.offsetX; // =>要素左上からのx座標
//         let offsetY = e.offsetY; // =>要素左上からのy座標
//         console.log(offsetX);
//         console.log(offsetY);
//     }

//     //konvaで画面尺度UP+カーソルで移動可能+四角図形作成
//     var width = document.documentElement.clientWidth*0.44;
//     var height = document.documentElement.clientHeight;

//     var stage = new Konva.Stage({
//         container: 'container',
//         width: width,
//         height: height,
//         draggable: true
//     });
//     //背景のレイヤー
//     var backlayer = new Konva.Layer();

//     var WIDTH = 2000;
//     var HEIGHT = 4000;
//     var NUMBER = 200;

//     var imgobj = new Image();
//     imgobj.src="/png/sample.png";

//     imgobj.onload = function(){
//     ////FAX処理開始////
//         var fax = new Konva.Image({
//             x:10,
//             y:10,
//             image:imgobj,
//             width:2000,
//             height:4000,
//         });

//     backlayer.add(fax);
//     backlayer.batchDraw();
//     ////FAX処理終了////

//     stage.add(backlayer);
//     backlayer.moveToBottom()
//     };
//     //図形のレイヤー
//     var layer = new Konva.Layer();

//     //発注者は初めからハイライト
//     var square1 = new Konva.Rect({
//         x: 483,
//         y: 23,
//         width: 250,
//         height:100,
//         fill: "yellow",
//         opacity:0.2,
//         strokeWidth: 2,
//     });
//     layer.add(square1);
//     stage.add(layer);

//     //確認事項の発注者もハイライト
//     $('.check1').css('background-color', 'yellow');

//     //クリックされたとき黄色の四角いハイライトを出していく処理
//         ////四角いハイライトのクラスを作成する////
//         // class Squ {
//         //     constructor( x, y, width, height){
//         //         this.x =x;
//         //         this.y =y;
//         //         this.width =width;
//         //         this.height =height;
//         //     }

//         //     makeSquare() {
                
//         //                 x: this.x,
//         //                 y: this.y,
//         //                 width: this.width,
//         //                 height:this.height,
//         //                 fill: "yellow",
//         //                 opacity:0.2,
//         //                 strokeWidth: 2,
//         //     }

//         // }
//              square2 = new Konva.Rect({
//                 x: 1078,
//                 y: 390,
//                 width: 700,
//                 height:140,
//                 fill: "yellow",
//                 opacity:0.2,
//                 strokeWidth: 2,
//             });
//              square3 = new Konva.Rect({
//                 x: 180,
//                 y: 400,
//                 width: 400,
//                 height:100,
//                 fill: "yellow",
//                 opacity:0.2,
//                 strokeWidth: 2,
//             });
//              square4 = new Konva.Rect({
//                 x: 190,
//                 y: 500,
//                 width: 450,
//                 height:100,
//                 fill: "yellow",
//                 opacity:0.2,
//                 strokeWidth: 2,
//             });
//              square5 = new Konva.Rect({
//                 x: 170,
//                 y: 640,
//                 width: 1200,
//                 height:500,
//                 fill: "yellow",
//                 opacity:0.2,
//                 strokeWidth: 2,
//             });


//     //発注者にチェック入ったとき
//     $(function(){
//         $('#check1').on('click', function(event){
//             $('.check1').css('background-color', 'skyblue');
//             $(this).val('確認済み');
//             square1.fill('skyblue');
//             layer.draw();
//             $('.check2').css('background-color', 'yellow');
//             //納品先が黄色になる


//             // console.log(square2.makeSquare());

//             layer.add(square2);
//             stage.add(layer);
//         });
//     });
//     //納品先にチェックが入ったとき
//     $(function(){
//         $('#check2').on('click', function(event){
//             $('.check2').css('background-color', 'skyblue');
//             $(this).val('確認済み');
//             square2.fill('skyblue');
//             layer.draw();
//             //納品希望日と納品確定日が黄色になる
//             $('.check3').css('background-color', 'yellow');
//             $('.check4').css('background-color', 'yellow');
//             $('.check8').css('background-color', 'yellow');
//             layer.add(square3);
//             stage.add(layer);
//         });
//     });
    
//     //受注日にチェック入ったとき
//     $(function(){
//         $('#deli_date1').on('click', function(event){
//             $('.check3').css('background-color', 'skyblue');
//             $(this).val('確認済み');
//         });
//     });

//     //納品希望日にチェック入ったとき
//     $(function(){
//         $('#check8').on('click', function(event){
//             $('.check8').css('background-color', 'skyblue');
//             $(this).val('確認済み');
//             square3.fill('skyblue');
//             $('.check5').css('background-color', 'yellow');
//             layer.add(square4);
//             stage.add(layer);
//         });
//     });
//     //納品確定日
//     $(function(){
//         $('#check4').on('click', function(event){
//             $('.check4').css('background-color', 'skyblue');
//             $(this).val('確認済み');
//             $('.check5').css('background-color', 'yellow');
                
//             layer.add(square4);
//             stage.add(layer);
//             });
//         });

//     //発注No.
//     $('#check5').on('click', function(event){
//         $('.check5').css('background-color', 'skyblue');
//         $(this).val('確認済み');
//         square4.fill('skyblue');
//         layer.draw();
//         $('.check6').css('background-color', 'yellow');
        
//         layer.add(square5);
//         stage.add(layer);
//     });

//     //商品詳細
//     $(function(){
//         $('#check6').on('click', function(event){
//             $('.check6').css('background-color', 'skyblue');
//             // $('.check7').css('background-color', 'yellow');
//             $(this).val('確認済み');
//             square5.fill('skyblue');
//             layer.draw();
//         });
//     });
//     //送り状
//     $(function(){
//         $('.check7').on('click', function(event){
//         $('.check7').css('background-color', 'skyblue');
//         $(this).val('確認済み');
//         square6.fill('skyblue');
//         layer.draw();
//         $('.item-detail').css('background-color', 'yellow');
//         });
//     });

//     $(function(){
//         $('#inhouse-memo').on('click', function(event){
//         $('.check9').css('background-color', 'skyblue');
//         });
//     });

//     $(function(){
//         $('#secret-memo').on('click', function(event){
//         $('.check10').css('background-color', 'skyblue');
//         });
//     });

// });



//     // 確認ボタンがクリックされたときの処理
//         $(function(){
//             $('.save').on('click', function(event){
//                 $(this).css('background-color', 'skyblue');
//                 // $(this).val('保存しました');
//                 // document.getElementByClass('move').show();
//             });
//         });

// -------------------------------------------------------

/////イベント処理を書く
// 必要な変数作成
    var stage ;
// 必要な配列作成
    //1.四角の図形を格納する配列
    rectArray = [
        // {handlerId:'order_company'},

    ];
    // 2.四角形のサイズの情報の配列
    rectConditions = [
        {order_company:{x: 483,
                        y: 23,
                        width: 250,
                        height:100,}
        }
    ];


// -【1】画面表示
//  -PDFの画像を読みこんで表示する
     function showPDFImg() {
        // konva描画の画面サイズ設定
        var width = document.documentElement.clientWidth*0.44;
        var height = document.documentElement.clientHeight;

        var stage = new Konva.Stage({
            container: 'container',
            width: width,
            height: height,
            draggable: true
        });
        //背景のレイヤー
        var backlayer = new Konva.Layer();
        var WIDTH = 2000;
        var HEIGHT = 4000;
        var NUMBER = 200;

        var imgobj = new Image();
        imgobj.src="/png/sample.png";

        imgobj.onload = function(){
            var fax = new Konva.Image({
                x:10,
                y:10,
                image:imgobj,
                width:2000,
                height:4000,
            });

        backlayer.add(fax);
        backlayer.batchDraw();
        stage.add(backlayer);
        backlayer.moveToBottom()
        };
    }

    // -【2】フィールドが入力モードになったとき

    function onFocus() {
        // フォーカスされたフィールドとボタンを黄色にする
        $('input[type="text"]').focus(function(){
            $(this).addClass('on-edit');
            //入力モードのinputタグのIDと同じclassを持っているボタンを探す
             var fieldId = $(this).attr('id');
             var element = document.getElementsByClassName(fieldId);
             $(element[0]).addClass('on-edit');

            searchRect(element[0]);
        });
    }

    function searchRect(elementId) {
        //四角が作成されているか配列から探す。フォーカスのあったIDから、その関連する四角をrectArray配列から検索
        // $('input[type="text"]').focus(function(){
        //     var fieldId = $(this).attr('id');
            let rectDict = rectArray.find(rect => rect.handlerId == elementId);
            console.log(rectDict);
                //→見つければ、handlerId: "order_company"など、見つからないundifined

            if(rectDict === 'null') {
                //黄色の四角を作成
                console.log('a');
                createRect();
            } else if (rectDict !== 'null'){
                console.log('b');
                //青色だったら黄色にする
                createRect();
            }
        // });
    }

    function setRect(x, y, w, h, color) {
        //四角の条件を設定する
        return new Konva.Rect({
        x: x,
        y: y,
        height: h,
        width: w,
        fill: 'color',
        opacity: 0.2,
        strokeWidth: 2
        });
    }

    function  createRect() {
        //黄色い四角を作成する
        $('input[type="text"]').focus(function(){
            let x = $(this).attr('rect-x');
            let y = $(this).attr('rect-y');
            let w = $(this).attr('rect-w');
            let h = $(this).attr('rect-h');
            let rect = setRect(x, y, w, h, 'yellow');

            var layer = new Konva.Layer();
            layer.add(rect);
            stage.add(layer);
            console.log('now');

            rectArray.push({
                rect: rect,
                // handlerId: buttonのID / fieldのID
            });
        });
    }

    // 【3】フィールドからフォーカスアウトした
    function outFocus(element) {
        // フォーカスアウトしたフィールドとは背景白色
        $('input[type="text"]').blur(function(){
            $(this).removeClass('on-edit');
            var inputId = $(this).attr('id');
            var element = document.getElementsByClassName(inputId);
            $(element[0]).addClass('on-edit');
            $(element[0]).removeClass('on-edit');
        });
    }

    // 【4】確定ボタンが押される
            // 1.ボタンとフィールドを青色にする


            // 2.四角を青色にする






    ///// 実行処理//////
    // 1.PDFの呼び出し
    let target = document.getElementById('container');
    $(document).ready( function(){
        showPDFImg();
    });

    // 2.入力待ちフィールドにfocusin:
    $(document).ready(function(){
        onFocus();
        outFocus();

        // searchRect();
        // createRect();
    });


    // 3．編集中フィールドからfocusout:
    // 4.確定ボタンをclick: