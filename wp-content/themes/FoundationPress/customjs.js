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

/*$('.contacthigh').css({
    height: $('.wrapperred').height(),
    width: $('.wrapperred').width(),
})*/

$('.contactcube').on('click', function(e){
    e.preventDefault()
    $('.contacthigh').css({
        height: $('.wrapperred').height(),
        width: $('.wrapperred').width(),
        opacity: '1',
        zIndex: '10'
    })

    setTimeout(function(){
        $('.customform').addClass('animated fadeInUp')
    },300)
})

$(document).ready(function(){
    $(".container").on('inview', function(event, isInView) {
        if (isInView) {
            $('.fadezer').css({
                top:'0',
                opacity:'1',
                position:'fixed',
            })
        } else {
            $('.fadezer').css({
                top:'-100vh',
                opacity:'0',
                position:'absolute',
            })
        }
    });

    /*$(".marginfoot").on('inview', function(event, isInView) {
        if (isInView) {
            $('.footz').css({
                zIndex:'15',
                opacity:'1'
            })
        } else {
            $('.footz').css({
                zIndex:'10',
                opacity:'0'
            })
        }
    });*/
})

$('.close').on('click', function(e){
    e.preventDefault()
    $('.contacthigh').css({
        height: '0px',
        width: '0px',
        opacity: '0',
        zIndex: '1'
    })

    $('.customform').css({
        opacity:'0',
    }).removeClass('animated fadeInUp')
})

$('.sliderz, .titlez').hover(function(){
    $('.active .sliderz').addClass('hovered')
}, function(){
    $('.active .sliderz').removeClass('hovered')
})

$('.buttonport').on('click', function(e){
    e.preventDefault()
    var self = $(this);

    $('.carrerouge').css({
        width:'110%',
        opacity:'1',
    })

    $('.navigationcube').css({
        opacity:'0',
        transition:'1s',
    })

    $('.more').css({
        opacity:'0',
        transition:'1s',
    })

    $('#owlslide').css('width', '0px')

    $('.navbarre').css({
        opacity:'0',
        transition:'0.5s',
    })

    setTimeout(function(){
        $('body').addClass('animated fadeOut')
    }, 600)

    setTimeout(function(){
        window.location.href = self.attr('href');
    }, 1100)
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

$('.hamburger').on('click', function(){
    $(this).addClass('deploye')

    $('.wrapper').css({
        opacity:'0',
        transition:'0.5s',
    })

    $('.wrapperred').css({
        opacity:'0',
        transition:'0.5s',
    })

    setTimeout(function(){
        $('.hiddedtoggle').toggle('slow')
    }, 400)
})

$('#owlslide .item').css('height', $('#owlslide'))
