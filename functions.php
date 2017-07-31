<?php 

/**************************************

 *  THEME SUPORT

 **************************************/

function add_suport_theme(){

    add_theme_support( 'post-thumbnails' );

}

add_action('after_setup_theme','add_suport_theme');





/**************************************

 * Registro Menu Personalizado

 **************************************/

add_theme_support('menus');



/**************************************

 * Registro Menu Personalizado

 **************************************/

add_theme_support('menus');

register_nav_menus( array(

    'primary' => __( 'Menu header', 'menu-header' ),

) );

/**************************************

 *  SCRIPTS / CSS

 **************************************/



//ESCONDER NOTÍCIAS DO MENU - ADMIN

add_action('admin_menu','wp_hide_msg');



function wp_hide_msg() { remove_action( 'admin_notices', 'update_nag', 3 ); }



//Esconde adimin bar do front

add_filter('show_admin_bar', '__return_false');



//Registrando estilo do tema

function load_tema_styles() {



   //bootstrap

   wp_register_style( 'tema-bootstrap', get_template_directory_uri() . '/assets/bower_components/bootstrap/dist/css/bootstrap.min.css' );

   //owlcarousel

   wp_register_style( 'tema-owlcarousel', get_template_directory_uri() . '/assets/bower_components/owlcarousel/dist/assets/owl.carousel.min.css' );

   wp_register_style( 'tema-owlcarousel-default', get_template_directory_uri() . '/assets/bower_components/owlcarousel/dist/assets/owl.theme.default.min.css' ); 

   //wp_register_style( 'tema-percicle-default', get_template_directory_uri() . '/assets/ bower_components/percircle/dist/css/percircle.css' );

     //animate

    wp_register_style( 'tema-animate', get_template_directory_uri() . '/assets/bower_components/animate.css/animate.min.css' );

    //hover

    wp_register_style( 'tema-hover', get_template_directory_uri() . '/assets/bower_components/hover/css/hover-min.css' );

    //    wp_register_style( 'tema-wow', get_template_directory_uri() . '/assets/bower_components/wow/css/hover-min.css' );



  

   

    

 

   //estilo

   //wp_register_style( 'tema-site', get_template_directory_uri() . '/assets/css/style.css' );

   wp_register_style( 'tema-site2', get_template_directory_uri() . '/assets/css/main.css' );

   wp_register_style( 'tema-media', get_template_directory_uri() . '/assets/css/media.css' );

   wp_register_style( 'fonts-site', get_template_directory_uri() . '/assets/css/fonts/fonts.css' );

   wp_register_style( 'fontello', get_template_directory_uri() . '/assets/css/font/fontello.css' );

   wp_register_style( 'video', get_template_directory_uri() . '/assets/videos/webdesign.mp4' );





   wp_enqueue_style( 'tema-bootstrap');

   wp_enqueue_style( 'tema-owlcarousel');

   wp_enqueue_style( 'tema-owlcarousel-default');

   wp_enqueue_style( 'tema-percircle-default');

   wp_enqueue_style( 'tema-animate');

   wp_enqueue_style( 'tema-hover');

   wp_enqueue_style( 'tema-site');

   wp_enqueue_style( 'tema-site2');

   wp_enqueue_style( 'tema-media');

   wp_enqueue_style( 'fontello');

   wp_enqueue_style( 'fonts-site');

   wp_enqueue_style( 'video');

       

   

}



add_action( 'wp_enqueue_scripts', 'load_tema_styles', 1 );





/*

*

* Registrando script do tema

*

*/

function load_tema_script() {

   global $cg_live_preview;



   if ( !is_admin() ) {



       // JS do bootstrap

       wp_enqueue_script( 'meutema_bootstrap_js', CORE_BOOTSTRAP_JS . 'bootstrap.min.js', array( 'jquery' ), '', true );

        wp_enqueue_script( 'meutema_owlcarousel_js', CORE_OWLCAROUSEL_JS . 'owl.carousel.min.js', array( 'jquery' ), '', true );

        //wp_enqueue_script( 'meutema_percircle_js', CORE_PERCIRCLE_JS . 'percircle.js', array( 'jquery' ), '', true );

        wp_enqueue_script( 'meutema_wow_js', CORE_WOW_JS . 'wow.min.js', array( 'jquery' ), '', true );

       // JS do tema

       wp_enqueue_script( 'meutema_frontjs', CORE_JS . 'app.js', array( 'jquery' ), '', true );

       // localizando js do tema

       wp_localize_script( 'meutema_frontjs', 'cg_ajax', array( 'cg_ajax_url' => admin_url( 'admin-ajax.php' ) ) );







       

   }

}



//Making jQuery Google API

function modify_jquery() {

   if (!is_admin()) {

       // comment out the next two lines to load the local copy of jQuery

       wp_deregister_script('jquery');

       wp_register_script('jquery', CORE_BOWER_COMPONENTS . 'jquery/dist/jquery.min.js', false, '3.1.1');

       wp_enqueue_script('jquery');

   }

}

add_action('init', 'modify_jquery');

add_action( 'wp_enqueue_scripts', 'load_tema_script' );



/*

*

* DEFINIÇÕES

*

*/

define( 'CORE_BOWER_COMPONENTS',  get_template_directory_uri() . '/assets/bower_components/' );

define( 'CORE_JS',  get_template_directory_uri() . '/assets/js/' );

define( 'CORE_BOOTSTRAP_JS',  get_template_directory_uri() . '/assets/bower_components/bootstrap/dist/js/'  );

define( 'CORE_OWLCAROUSEL_JS',  get_template_directory_uri() . '/assets/bower_components/owlcarousel/dist/'  );

define( 'CORE_PERCIRCLE_JS',  get_template_directory_uri() . '/assets/bower_components/percircle/dist/js/'  );

define( 'CORE_WOW_JS',  get_template_directory_uri() . '/assets/bower_components/wow/dist/'  );



/*define( 'CORE_FONT_AWESOME', get_template_directory_uri() . '/core/font-awesome' );*/



// Register Custom Navigation Walker ( bootstrap)

/*require_once('wp_bootstrap_navwalker.php');

*/

//Registrando menu

/*register_nav_menus( array(

   'primary' => __( 'Menu principal', 'MEUTEMA' ),

) );

*/

// Habilitando o uso das imagens destacadas ou post thumbnails



if ( function_exists( 'add_theme_support' ) ) {



   add_theme_support( 'post-thumbnails' );



}





/**

 * slider home

 */



 function slide_home($limit){  

            $args = array( 'post_type' => 'slide', 'posts_per_page' => $limit, 'order' => 'ASC' );

            $loop = new WP_Query( $args );



            while ( $loop->have_posts() ) : $loop->the_post();

  

            $tipoSlide = get_post_custom_values('wpcf-tipo-de-slider');

            $tipoSlide = $tipoSlide[0];

            

            $link = get_post_custom_values('wpcf-link');

            $link = $link[0];

            

            $video = get_post_custom_values('wpcf-video');

            $video = $video[0];



            $imagem = get_post_custom_values('wpcf-imagem');

            $imagem = $imagem[0];



            $editor = get_post_custom_values('wpcf-editor');

            $editor = $editor[0];



            switch ($tipoSlide) {

              //Se for Vídeo

              case '1':

               echo '<div class="container">
    <div class="content">

     <h2>' . get_the_title() . '</h2>

       <p>Were a small team of highly skilled<br/> problem solvers specialized</p>

    </div>

    <div id="demo-scroll" class="demo">

      <div><a class="scroll-down" href="' . $link . '"><span></span><span></span><span></span></a></div>

    </div>
    <video autoplay loop id="video-background" poster="" muted>

                <source src="' . $video . '" type="video/mp4" width="100%">

                </video>

  </div>';

              

                break;



                //Se for Imagem



              case '2':

                

                echo '<h2>' . get_the_title() . '</h2>';

                echo '<img src="' . $imagem . '" alt="' . the_title() . '/">';

                  echo '<a href="' . $link . '">LINK</h2></a>';



                break;



                //Se for HTML



              case '3':

                

                echo '<h2>' . get_the_title() . '</h2>';

                echo '<div class="editor-html">' . $editor . '</div>';



                break;

              

              default: 

                

                echo 'Nenhum';



                break;

            }



            endwhile;                           

}









/**

 *Função que chama os CallToActions Rastreáveis

 */



function trackButton($type, $category, $action, $label, $url, $title, $id, $class, $content){

  

  if ( $type == 'link' ):

  

  echo'<a class="' . $class . '" href="' . $url . '" title="' . $title . '" onclick="ga(\'send\', \'event\', \'' . $category . '\',\'' . $action . '\', \'' . $label . '\');" id="' . $id . '">' . $content . '</a>';

  

  elseif ( $type == 'submit' ):

  

    echo'<input type="submit" value="' . $content . '" name="' . $url . '" id="' . $id . '" class="' . $class . '" onclick="ga(\'send\', \'event\', \'' . $category . '\',\'' . $action . '\', \'' . $label . '\');" id="' . $id . '">';

  

   elseif ( $type == 'button' ):

  

    echo'<button id="' . $id . '" class="' . $class . '" onclick="ga(\'send\', \'event\', \'' . $category . '\',\'' . $action . '\', \'' . $label . '\');" id="' . $id . '">' . $content . '</button>';

  

  endif;



}



//Campos Personalizados

function campo_customizado($nome_campo){

            

    if ($nome_campo){

      $campo = get_post_custom_values($nome_campo);

      $campo = $campo[0];



      echo $campo;

    }

}



//Imagem Destacada de cada post

function imagem_destacada($size, $class_css, $title, $id){



 if ( has_post_thumbnail() ) {

                  

  

    $image_id = get_post_thumbnail_id();

    $sizeThumbs = $size;

    $urlThumbnail = wp_get_attachment_image_src($image_id, $sizeThumbs);

    $urlThumbnail = $urlThumbnail[0];



    echo '<img class="' . $class_css . '" src="' .  $urlThumbnail . '" alt="'. $title . '" id="'. $id .'">';

  } 

}



function is_current_content($type, $vector){
    

    if( $type == 'tax') {

      $term_object = get_queried_object();
      $slug_term =  $term_object->slug;

        if( $slug_term == $vector ) {
          echo' filtro__ativo';          
        } 

    }

}

