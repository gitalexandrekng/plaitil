//$('.wrapper').css('height', $( window ).height() - $('.navbarre').innerHeight())

$('.inz').hover(function(){
    $(this).find('.fond').css({
        transform:'scale(1.1)'
    })
}, function(){
    $(this).find('.fond').css({
        transform:'scale(1)'
    })
})
