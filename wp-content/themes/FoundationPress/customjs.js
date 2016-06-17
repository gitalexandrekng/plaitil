//$('.wrapper').css('height', $( window ).height() - $('.navbarre').innerHeight())

$(document).ready(function() {
		$('.js-scrollTo').on('click', function() { // Au clic sur un élément
			var page = $(this).attr('href'); // Page cible
			var speed = 750; // Durée de l'animation (en ms)
			$('html, body').animate( { scrollTop: $(page).offset().top }, speed ); // Go
			return false;
		});
	});

$('.navig a').addClass('js-scrollTo')
$('.navig a:eq(2)').addClass('non')
$('.js-scrollTo').on('click', function(){
    $('.hiddedtoggle').css('display', 'none')
    $('.wrapperred').css('opacity', '1')
    $('.wrapper').css('opacity', '1')
    $('body').css('overflowY', '')
})

$('body a:not(.non)').on('click', function(e){
    e.preventDefault()
    var self = $(this)
    $('body').addClass('animated fadeOut')

    setTimeout(function(){
        window.location.href = self.attr('href');
    }, 1000)
})

$(window).load(function(){
    setTimeout(function(){
        $('.loader').addClass('animated fadeOutDown')
    }, 1000)

    setTimeout(function(){
        $('.val').addClass('animated fadeInUp')
    }, 1200)
})

$('.inz').hover(function(){
    $(this).find('.fond').css({
        transform:'scale(1.1)'
    })
}, function(){
    $(this).find('.fond').css({
        transform:'scale(1)'
    })
})

$('.vignette').hover(function(){
    $(this).find('.thumbn').css({
        transform:'scale(1.5)',
    })

    $(this).find('.hovered').css({
        background:'rgba(0,0,0,0.8)',
    })

    $(this).find('.more').css({
        opacity:'1',
        bottom:'0'
    })

    $(this).find('.tit').addClass('animated fadeInUp')

}, function(){
    $(this).find('.thumbn').css({
        transform:'scale(1)',
    })

    $(this).find('.hovered').css({
        background:'rgba(0,0,0,0)',
    })

    $(this).find('.more').css({
        opacity:'0',
        bottom:'35px'
    })

    $(this).find('.tit').removeClass('animated fadeInUp')
})

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

$('.wrappered').css('height', $(window).height() - 90)

$('.wrappered').parallax("50%", 0.5);
$('.banner').parallax("50%", 0.5);

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

    /*$(".wrappered").on('inview', function(event, isInView) {
        if (isInView) {
            $('.navbarre').css({
                position:'absolute',
            })
        } else {
            $('.navbarre').css({
                position:'fixed',
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
        //background:'rgba(52,152,219,1)'
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

$('#responsiveslider').owlCarousel({
    items:1,
    autoplay:true,
    loop:true,
    startPosition: 'URLHash',
    animateOut: 'fadeOut',
    animateIn: 'fadeIn',
});

$('.hamburger').hover(function(){
    $(this).css({
        transform:'scale(1.4)',
        transition:'0.2s',
        color:'#3498db'
    })
}, function(){
    $(this).css({
        transform:'scale(1)',
        transition:'0.2s',
        color:'black'
    })
})

$('.hamburger').on('click', function(){

    $('body').css({
        overflowY:'hidden',
    })

    $(this).css({
        opacity:'0',
        zIndex:'1'
    })

    $('.wrapper-medium').css({
        opacity:'0',
        transition:'0.5s',
    })

    $('.wrapper').css({
        opacity:'0',
        transition:'0.5s',
    })

    $('.z').css({
        opacity:'0',
        transition:'0.5s',
    })

    $('.wrapperred').css({
        opacity:'0',
        transition:'0.5s',
    })

    setTimeout(function(){
        $('.hiddedtoggle').css({
            height:'70vh',
        })
    }, 400)

    setTimeout(function(){
        $('.navig').addClass('animated fadeInUp')
    }, 800)
})

$('.croix').on('click', function(){

    $('body').css({
        overflowY:'',
    })

    $('.navig').removeClass('animated fadeInUp')

    $('.wrapper-medium').css({
        opacity:'1',
    })

    $('.wrapper').css({
        opacity:'1',
    })

    $('.z').css({
        opacity:'1',
    })

    $('.wrapperred').css({
        opacity:'1',
    })

    $('.hiddedtoggle').css({
        height:'0vh',
    })

    $('.hamburger').css({
        opacity:'1',
        zIndex:'3'
    })
})

$('#owlslide .item').css('height', $('#owlslide'))

$('.thu').hover(function(){
    $(this).find('.zo').css({
        transform:'scale(1.2)',
    })
}, function(){
    $(this).find('.zo').css({
        transform:'scale(1)',
    })
})
