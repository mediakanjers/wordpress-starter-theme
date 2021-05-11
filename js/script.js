jQuery(window).ready(function($) {

    //Start
    if(!$('body').hasClass('paginascroll') && $(window).scrollTop() > 0) { $('body').addClass('paginascroll'); } 

    //scroll
    $( window ).scroll(function() 
    {
      if(!$('body').hasClass('paginascroll') && $(window).scrollTop() > 0) { $('body').addClass('paginascroll'); } 
      else if( $(window).scrollTop() == 0 ) { $('body').removeClass('paginascroll'); setTimeout(() => { mk_menu(); }, 500);  }
    });

    //resize
    $( window ).resize(function() {
        mk_menu();
    });
    
    //on load
    $( window ).on( "load", function() {
    
        if(!$('body').hasClass('paginaloaded') ) { $('body').addClass('paginaloaded'); } 
    });



    //Header menu
    var heightmenu = $('#full_header').outerHeight();
    function mk_menu()
    {
        if(!$('body').hasClass('paginascroll') ) { heightmenu = $('#full_header').outerHeight(); }

        if( $(document).width() < 479 ) { $('body').addClass('m_menu'); }
        else { $('body').removeClass('m_menu'); }

        $('#mk-main-area').css('padding-top', heightmenu + 'px');
    }
    mk_menu();


    // shiftnav
    delay = 100;
    $('#shiftnav-main ul#menu-hoofdmenu > li').each(function()
    {
        $(this).css('animation-delay', delay + 'ms');
        $(this).css('-webkit-animation-delay', delay + 'ms');

        delay += 100;
    });

    $('#shiftnav-main .shiftnav_contentaftermenu').css('animation-delay', delay + 'ms');
    $('#shiftnav-main .shiftnav_contentaftermenu').css('-webkit-animation-delay', delay + 'ms');
    


    //mk builder galerij slider
    $('.galerij-carousel').owlCarousel({
        autoplay:true,
        autoplayTimeout:5000,
        loop:true,
        dots:false,
        responsive:{
            0:{
                items:1,
                
            },
            479:{
                items:2,
                
            },
            980:{
                items:3,
            },
        }
    });


    //Voorpagina slider
    var mySwiper = new Swiper ('.frontpageslider', {
        loop: false,
        speed:1000,
        effect:"fade",
        fadeEffect: {
            crossFade: true,
        },
        autoplay: {
            delay: 3000,
        }
    });


});