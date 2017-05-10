$(document).ready(function(){


    /* $("#custom").percircle({
        text:"Mais de 100.000",
        percent: 27,
        timeUpText: 'fanally!'
     });*/
   
    //inicia o os efeitos do site
    new WOW().init();
      

    //efeito do header quando ativar o scroll.
    $('html').on('DOMMouseScroll mousewheel', function (e) {
        if(e.originalEvent.detail > 0 || e.originalEvent.wheelDelta < 0) { 

            //scroll down
            console.log('Down');
            $( "#tarja-header" ).addClass( "hide-nav-bar" );
            $( "#header-top" ).addClass( "navbar-top" );
            $( ".menu" ).addClass( "menu-top" );
            $( ".navbar-brand" ).addClass( "logo-top" );
            $( ".pesquisa" ).addClass( "pesquisa-top" );
            $( ".mobile_search" ).addClass( "form-top" );
            $( "#form_pesquisa" ).addClass( "form_pesquisa_mobile-top" );
            $( "body" ).addClass( "body-top" );
        } else {
            //scroll up
            console.log('Up');
            $( "#tarja-header" ).removeClass( "hide-nav-bar" );
            $( "#header-top" ).removeClass( "navbar-top" );
            $( ".menu" ).removeClass( "menu-top" );
            $( ".navbar-brand" ).removeClass( "logo-top" );
            $( ".pesquisa" ).removeClass( "pesquisa-top" );
            $( ".mobile_search" ).removeClass( "form-top" );
            $( "#form_pesquisa" ).removeClass( "form_pesquisa_mobile-top" );
            $( "body" ).removeClass( "body-top" );
        }
    });

    //desabilita o efeito do header-scroll no mobile
    $(window).scroll(function () {
        var sc = $(window).width()
        if (sc < 842) {
            $( "#tarja-header" ).removeClass( "hide-nav-bar" );
            $( "#header-top" ).removeClass( "navbar-top" );
            $( ".menu" ).removeClass( "menu-top" );
            $( ".navbar-brand" ).removeClass( "logo-top" );
            $( ".pesquisa" ).removeClass( "pesquisa-top" );
            $( ".mobile_search" ).removeClass( "form-top" );
            $( "#form_pesquisa" ).removeClass( "form_pesquisa_mobile-top" );
            $( "body" ).removeClass( "body-top" );
        }
    });



    //OBS TÁ GERANDO PROBLEMA NO CONSOLE
    //botao scroll banner
     //$(function() {
       // $('a[href*=#]').on('click', function(e) {
       // e.preventDefault();
       //     $('html, body').animate({ scrollTop: $($(this).attr('href')).offset().top}, 500, 'linear');
      //  });
   // });



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

    
    // - script do texto banner -
   /* var TxtRotate = function(el, toRotate, period) {
      this.toRotate = toRotate;
      this.el = el;
      this.loopNum = 0;
      this.period = parseInt(period, 10) || 2000;
      this.txt = '';
      this.tick();
      this.isDeleting = false;
    };

    TxtRotate.prototype.tick = function() {
      var i = this.loopNum % this.toRotate.length;
      var fullTxt = this.toRotate[i];

      if (this.isDeleting) {
        this.txt = fullTxt.substring(0, this.txt.length - 1);
      } else {
        this.txt = fullTxt.substring(0, this.txt.length + 1);
      }

      this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

      var that = this;
      var delta = 300 - Math.random() * 100;

      if (this.isDeleting) { delta /= 2; }

      if (!this.isDeleting && this.txt === fullTxt) {
        delta = this.period;
        this.isDeleting = true;
      } else if (this.isDeleting && this.txt === '') {
        this.isDeleting = false;
        this.loopNum++;
        delta = 500;
      }

      setTimeout(function() {
        that.tick();
      }, delta);
    };

    window.onload = function() {
      var elements = document.getElementsByClassName('txt-rotate');
      for (var i=0; i<elements.length; i++) {
        var toRotate = elements[i].getAttribute('data-rotate');
        var period = elements[i].getAttribute('data-period');
        if (toRotate) {
          new TxtRotate(elements[i], JSON.parse(toRotate), period);
        }
      }
      // INJECT CSS
      var css = document.createElement("style");
      css.type = "text/css";
      css.innerHTML = ".txt-rotate > .wrap { border-right: 0.08em solid purple }";
      document.body.appendChild(css);
    };*/


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
});



