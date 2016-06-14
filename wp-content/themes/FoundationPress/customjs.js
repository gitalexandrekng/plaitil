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


$('#owlslide').owlCarousel({
    items:1,
    URLhashListener:true,
    autoplayHoverPause:true,
    loop:true,
    startPosition: 'URLHash',
    mouseDrag: false,
    animateOut: 'slideOutDown',
    smartSpeed:450
});

$('#owltitle').owlCarousel({
    items:1,
    URLhashListener:true,
    autoplayHoverPause:true,
    loop:true,
    startPosition: 'URLHash',
    animateOut: 'fadeOut',
    animateIn: 'fadeIn',
    mouseDrag: false,
});

$('#owlslide .item').css('height', $('#owlslide'))
