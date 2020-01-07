// jQuery.noConflict();
// $(function(){ // if document is ready
//   alert('jQuery')
// });

$(document).ready( function(){
    $('.ordering_company').css('background-color', 'yellow');
});

$(function(){
    $('.check1').on('click', function(event){
        $('.ordering_company').css('background-color', 'skyblue');
        $(this).val('確認済み');

        if($('.delivery_place').css('background-color') == 'yellow'){
            $('.delivery_place').css('background-color', 'skybkue');
        }else{
            $('.delivery_place').css('background-color', 'yellow');
        }
    });
});

$(function(){
    $('.check2').on('click', function(event){
        $('.delivery_place').css('background-color', 'skyblue');
        $(this).val('確認済み');
        $('.delivery_date').css('background-color', 'yellow');
    });
});

$(function(){
    $('.check3').on('click', function(event){
        $('.delivery_date').css('background-color', 'skyblue');
        $(this).val('確認済み');
        $('.item-detail').css('background-color', 'yellow');
    });
});


$(function(){
    $('.check4').on('click', function(event){
        $('.item-detail').css('background-color', 'skyblue');
        $(this).val('確認済み');
        $('.invoice').css('background-color', 'yellow');
    });
});

$(function(){
    $('.check5').on('click', function(event){
        $('.invoice').css('background-color', 'skyblue');
        $(this).val('確認済み');
    });
});


// function changeBorder(idname){
//     $('.check1').on('click', function(event){
//     var obj = document.getElementById(idname);
//     if(obj.style.borderWidth == "1px"){
//       obj.style.borderWidth = "0px";
//     }else{
//       obj.style.border = "solid 1px blue";
//     }
//     });
//   }

// function changeBorder(idname){
// $('.check2').on('click', function(event){
// var obj = document.getElementById(idname);
// if(obj.style.borderWidth == "1px"){
//     obj.style.borderWidth = "0px";
// }else{
//     obj.style.border = "solid 1px blue";
// }
// });
// }