jQuery(document).ready(function($) {
    //inicia o os efeitos do site

    new WOW().init();

    //barra de pesquisa do header.

    $(".pesquisa").click(function() {

        $(".form_pesquisa_mobile").show();
        $(".maskEffect").toggleClass('on');
        $(".busca-top").toggleClass('on');
        $(this).toggleClass('on');
        $(".btn-close").show();
        //$(".btn-group.servico_cliente .btn").hide();
    });
    $(".btn-close").click(function(){
      $(".form_pesquisa_mobile").hide();
      $(".maskEffect").toggleClass('on');
      $(".btn-close").hide();
      $(".btn-group.servico_cliente .btn").show();
    
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
    
    if ( scroll > 60 ) {
        jQuery('body').addClass('scrollOn');
        jQuery('body').removeClass('scrollOff');
    //jQuery('.scrollOn header#header').addClass('fixed');
    } else {
        jQuery('body').removeClass('scrollOn');
        jQuery('body').addClass('scrollOff');
    }
  
  
    });

  
 
    //ao clicar no item do menu, a o scroll vai até a section escolhidaespecifica
    $(".nav_main .menu ul a.scroll, .link-up, .scroll.scroll-down").click(function(event){        
        event.preventDefault();
        $('html,body').animate({scrollTop:$(this.hash).offset().top - 25}, 1000);
    
     varHash = $(this).attr('href');   
    window.location.hash = varHash;
    
   });
  
 
  
});



 function call2action(id) {
                
                //alert('deu certo!');
                jQuery('body, .mask').addClass('on');
                jQuery('#'+id).addClass('on');
                jQuery('.mask').fadeIn(500);
                
                
                jQuery(document).keydown(function (e) {
                        if(e.which == 27)
                        {
                            jQuery('body, .lightBox, .mask').removeClass('on');
                            jQuery('.mask').fadeOut(300);
                            return false;
                        }
            });
    }
    
    function closeLightbox() {
                
                //alert('deu certo!');
                jQuery('body, .lightBox, .mask').removeClass('on');
                 jQuery('.mask').fadeOut(300);
                                
    }