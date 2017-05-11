jQuery(document).ready(function($) {
    //inicia o os efeitos do site

    new WOW().init();

      



    //efeito do header quando ativar o scroll.

    //$('html').on('DOMMouseScroll mousewheel', function (e) {

     //   if(e.originalEvent.detail > 0 || e.originalEvent.wheelDelta < 0) { 



            //scroll down

         //   console.log('Down');

         //   $( "#tarja-header" ).addClass( "hide-nav-bar" );

         //   $( "#header-top" ).addClass( "navbar-top" );

         //   $( ".menu" ).addClass( "menu-top" );

         //   $( ".navbar-brand" ).addClass( "logo-top" );

         //   $( ".pesquisa" ).addClass( "pesquisa-top" );

         //   $( ".mobile_search" ).addClass( "form-top" );

          //  $( "#form_pesquisa" ).addClass( "form_pesquisa_mobile-top" );

         //   $( "body" ).addClass( "body-top" );

      //  } else {

            //scroll up

        //    console.log('Up');

      //      $( "#tarja-header" ).removeClass( "hide-nav-bar" );

       //     $( "#header-top" ).removeClass( "navbar-top" );

       //     $( ".menu" ).removeClass( "menu-top" );

        //    $( ".navbar-brand" ).removeClass( "logo-top" );

         //   $( ".pesquisa" ).removeClass( "pesquisa-top" );

        //    $( ".mobile_search" ).removeClass( "form-top" );

        //    $( "#form_pesquisa" ).removeClass( "form_pesquisa_mobile-top" );

        //    $( "body" ).removeClass( "body-top" );

      //  }

   // });



    //desabilita o efeito do header-scroll no mobile

  //  $(window).scroll(function () {

    //    var sc = $(window).width()

    //    if (sc < 842) {

    //        $( "#tarja-header" ).removeClass( "hide-nav-bar" );

    //        $( "#header-top" ).removeClass( "navbar-top" );

     //       $( ".menu" ).removeClass( "menu-top" );

     //       $( ".navbar-brand" ).removeClass( "logo-top" );

      //      $( ".pesquisa" ).removeClass( "pesquisa-top" );

      //      $( ".mobile_search" ).removeClass( "form-top" );

      //      $( "#form_pesquisa" ).removeClass( "form_pesquisa_mobile-top" );

       //     $( "body" ).removeClass( "body-top" );

      //  }

 //   });



    //barra de pesquisa do header.

    $(".pesquisa").click(function() {

        $(".form_pesquisa_mobile").slideToggle('slow');

    });



    //menu-toggle

    $("#toggle").click(function(event){

        event.preventDefault();

        if ($(this).hasClass('on')){

            $(this).removeClass('on');

                $("#menu").stop().fadeOut();

        }else{

            $(this).addClass('on');

                $("#menu").stop().fadeIn();

            }

    });









    var alturaJanela = $(window).height();

    var alturaHeader= $('header .navbar .area_video_banner').height();

    var alturaTela = alturaJanela - alturaHeader;



    $('.area_video_banner').css({'height' : alturaTela+'px'}); 





    //carousel nossos carros.

    $('#owl-carros').owlCarousel({

        loop:true,

        nav:true,

        responsive:{

            0:{

                items:1

            },

            600:{

                items:3

            },

            1000:{

                items:3

            }

        }

    });



    //carousel opiniões dos nossos clientes.

    $('#owl-opinioes').owlCarousel({

        loop:true,

        nav:true,

        responsive:{

            0:{

                items:1

            },

            600:{

                items:3

            },

            1000:{

                items:4

            }

        }

    });



    //carousel entenda o consórcio.

    function owlconsorcio(){



        $('#owl-consorcio').owlCarousel({

            loop:true,

            nav:true,

            responsive:{

                0:{

                    items:1

                },

                600:{

                    items:2

                },

                1000:{

                    items:3

                }

            }

        });

    };



    $(window).resize(function(){

        resizeWin();

    });

    //ativa o owl-carousel entenda o consorcio em 876 de largura.

    function resizeWin(){

        if ($(window).width() < 876) {

           owlconsorcio();

        }

    }

//ScrollOn
  
    jQuery(window).scroll(function (event) {
    
    var scroll = jQuery(window).scrollTop();
    // Do something
    
    if ( scroll > 86 ) {
        jQuery('body').addClass('scrollOn');
        jQuery('body').removeClass('scrollOff');
    //jQuery('.scrollOn header#header').addClass('fixed');
    } else {
        jQuery('body').removeClass('scrollOn');
        jQuery('body').addClass('scrollOff');
    }
  
  
    });

  
 
    //ao clicar no item do menu, a o scroll vai até a section escolhidaespecifica
    $(".navbar .menu ul a").click(function(event){        
        event.preventDefault();
        $('html,body').animate({scrollTop:$(this.hash).offset().top - 25}, 1000);
    
     varHash = $(this).attr('href');   
    window.location.hash = varHash;
    
   });
  
 
  
});