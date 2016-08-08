//
// Custom Scripts for Theme
//

$(document).ready(function(){
    $('section').each(function(){
    	var that = this;
        var isIpad = navigator.platform.indexOf("iPad") != -1 ? true: false;

        $(that).css({ backgroundPosition: 'center ' + $(window).scrollTop() + 'px' });

        $(window).scroll(function(){
            if ( $(window).width() > 767 && isIpad == false ){
                var distance = -( ( $(window).scrollTop()- $(that).offset().top ) / $(that).data('step') ); 
                 
                var coors = 'center '+ distance + 'px';
                // Move the background
                $(that).css({ 'background-position': coors, });
                if( $(window).width() > 767 && $(that).hasClass('video-block') == false ){
                    //scrollWatch( $(that), $(that).find('button'), slideUp );
                    //scrollWatch( $(that), $(that).find('a>i'), slideDown );
                }
            }

            if($(window).scrollTop() < $('#quote').offset().top || $(window).scrollTop() == 0){
                $('.navbar-brand img').width(97);
                $('.nav-pills li span').show();
                $('.nav-pills li i').hide();
            }else{ 
                $('.navbar-brand img').width(50);
                $('.nav-pills li span').hide();
                $('.nav-pills li i').show();
            }

        }); 
    }); 

    $('section.video-block .section-content a>i').on({
        mouseover:function(){
            $(this).parent().parent().parent().addClass('bgfade');
        },
        mouseout:function(){
            $(this).css({
                '-webkit-animation-play-state':'running',
                '-moz-animation-play-state':'running',
                '-o-animation-play-state':'running',
                'animation-play-state':'running'
            }).addClass('pulseout');

            $(this).parent().parent().parent().removeClass('bgfade');
        }

    });

    smoothScroll();
});

//
// @param section: element to listen for scroll
// @param element: the element to animate when scroll reaches section
// @param action: call back function when element is triggered.

function scrollWatch( section, element, action ){
    var from = element.offset().top - ( $(window).height()/2 - 150 );
    var to = element.offset().top + element.height() + ( $(window).height()/2 + 100 );

    if( $(window).width() > 767 ){
        if ( $(window).scrollTop() + $(window).height()/2 > from &&
            $(window).scrollTop() + $(window).height()/2 < to) {
            action( element, 'in');
        }else {
            action( element, 'out');
        }
    }
}

function slideDown( element, direction ){
    var allClasses = 'slidedown slidedownreturn slideup slideupreturn';
    if( direction == 'in' ){
        $(element).removeClass( allClasses ).addClass( 'slidedown' );
    }else{
        //$(element).removeClass( allClasses ).addClass( 'slideupreturn' );
    }
}

function slideUp( element, direction ){
    var allClasses = 'slidedown slidedownreturn slideup slideupreturn';
    if( direction == 'in' ){
        $(element).removeClass( allClasses ).addClass( 'slideup' );
    }else{
       // $(element).removeClass( allClasses ).addClass( 'slidedownreturn' );
    }
}

function smoothScroll(){
   $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  }); 
}