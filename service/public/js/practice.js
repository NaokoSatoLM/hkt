// $(document).ready(function(){
// var options = {minMargin:5, maxMargin:15 , itemSelector: ".item", firstItemClass:"first-item"};
// $(".container").rowGrid(options);

// });

$(document).ready(function() {
    var options = {minMargin: 50, maxMargin: 300, itemSelector: ".item", firstItemClass: "first-item"};
    $(".container").rowGrid(options);
});

$('.zoo-item').ZooMove({
    scale: '300',
})
