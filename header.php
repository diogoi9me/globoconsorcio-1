<?php
/**
 * The header for our theme
 * @package WordPress
 * @subpackage Globo Consório
 * @since 1.0
 * @version 1.0
 */

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<title><?php wp_title(); ?></title>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> >

<div id="ligar" class="lightBox light">
  <div class="content animate">
    <?php get_template_part('template-parts/call2action', 'ligar'); ?>
  </div>
</div>
<div id="visitar" class="lightBox light">
  <div class="content animate">
    <?php get_template_part('template-parts/call2action', 'visitar'); ?>
  </div>
</div>
<div class="mask" onclick="javascript:closeLightbox();"></div>

  <div id="layer-transparent" class="layer-searc" >
    <header class="navbar transition" id="header-top">
      <div class="tarja transition vPadding" id="tarja-header">
        
        <ul class="module contacts absolute left middle autoWidth">
        <?php if( is_blog_content() ) { ?>

          <li class="block back">
            <a href="<?php echo get_home_url('/'); ?>">
              <i class="icon"></i>
              <span class="value">
                IR PARA O <strong>NOSSO SITE</strong>
              </span>
            </a>
          </li>
          
        <?php } else { ?>

          <li class="block phone float left">
            <i class="icon-phone"></i>
            <span class="value"><span class="ddd">(85)</span> <strong>3231-9689</strong></span>
          </li>

          <li class="block ligamos float left">
            <a href="javascript:call2action('ligar');">
              <i class="icon-volume-control-phone"></i>  
              <span class="value">NÓS <strong>LIGAMOS</strong> PARA VOCÊ</span>
            </a>
          </li>

        <?php } ?>
        </ul>

        <div class="brands module absolute center middle inline">
          
          <?php  if( is_blog_content() ) { ?>

          <div class="block relative brand autoWidth icon_yes globoconsorcio">
            <a class="animate" href="<?php echo get_home_url('/'); ?>">
              <i class="absolute middle left"></i><span class="value">Globo Consórcio</span>
            </a>
          </div>

          <?php  } ?>

          <div class="block relative brand autoWidth icon_yes gm">
            <i class="absolute middle left"></i><span class="value">Consórcio Nacional Chevrolet</span>
          </div>

        </div>
        
        <ul class="redes module absolute right middle autoWidth">
          <li>
            <a href="https://www.facebook.com/globoconsorcio" title="Facebook"><i class="icon-facebook"></i></a>
          </li>
          <li>
            <a href="https://www.instagram.com/sigagloboconsorcio/" title="Instagram"><i class="icon-instagram-1"></i></a>
          </li>
          <li>
            <a href="#" title="Youtube"><i class="icon-youtube-play icon--youtube-play" title="Youtube"></i></a>
          </li>
        </ul>
        <?php if( !is_blog_content() ) { ?>
        <div class="servicos absolute middle right">
          <a class="button animate" href="<?php echo get_home_url(); ?>/servicos/">SERVIÇOS AO CLIENTE</a>
        </div>
        <?php } ?>


      </div>
      <div class="container vPadding">

        <div class="navMain"></div>

        <span class="icon-pesquisa pesquisa transition" title="Pesquisar"></span>  
        <div class="busca-top">
          <form role="search" method="get" id="form_pesquisa" class="form_pesquisa_mobile" action="<?php echo esc_url( home_url( '/' ) ); ?>">
            <?php if( is_blog_content() ) { ?>
              <input type="hidden" name="post_type" value="post">
            <?php } ?>
            
            <input type="search" class="transition mobile_search" name="s" placeholder="Pesquise no Site" />
            <button type="submit" class="submitSerch"></button>
          </form>
        </div>

        <div class="logoSite module absolute left middle transition">
          <?php if( is_home() || is_front_page() ) { ?>
            <a class="link-up animate" href="#home">
              <i class="icon"></i>
            </a>
          <?php } elseif( is_blog_content() ) { ?>

         <a class="animate" href="<?php echo esc_url( home_url() ); ?>/blog/">
               <i class="icon"></i>
          </a>

          <?php } else { ?>
          
            <a class="animate" href="<?php echo esc_url( home_url() ); ?>/">
               <i class="icon"></i>
            </a>

          <?php } ?>
        </div>

        <?php require_once('assets/includes/wp_bootstrap_navwalker.php'); ?>
        <div class="nav_mobile">
          <a href="#menu" id="toggle"><span></span></a>

             
          <div id="bs-example-navbar-collapse-1 menu-top" class="menu collapse navbar-collapse">
            <ul id="menu-menu" class="nav navbar-nav">
            
              
              <?php if( is_blog_content() ) { ?>


                <?php
                  $menu_name = 'navBlog';

                  if( wp_get_nav_menu_object($menu_name) != '' ) { 

                  $menu = wp_get_nav_menu_object($menu_name);
                  $menuitems = wp_get_nav_menu_items( $menu->term_id, array( 'order' => 'DESC' ) );
                ?>
                <li class="menu-item itemNav first">
                  <a href="<?php echo get_home_url(); ?>/" class="linkNav">NOSSO SITE</a>
                </li>
                <?php
                  foreach( $menuitems as $item ):
                  // set up title and url
                  $title = $item->title;
                  $link = $item->url;
                  $class = $item->classes[0];
                ?>  
                <li class="menu-item itemNav <?php echo $class; ?>">
                  <a class="linkNav animate" href="<?php echo $link; ?>" title="<?php echo $title; ?>">
                    <?php echo $title; ?>
                  </a>
                </li>                       
                <?php  endforeach; ?>

                <?php } ?>

                <?php } else { ?>

            
                <li class="menu-item itemNav first">
                  <a href="<?php echo get_home_url(); ?>/simulacao" class="linkNav">SIMULAÇÃO</a>
                </li>
                <li class="menu-item itemNav">
                  <a href="<?php echo get_home_url(); ?>/veiculos" class="linkNav animate">VEÍCULOS</a>
                </li>
                <li class="menu-item itemNav">
                  <a href="<?php echo get_home_url(); ?>/planos" class="linkNav animate">PLANOS</a>
                </li>
                <li class="menu-item itemNav">
                  <a href="<?php echo get_home_url(); ?>/consorcio-chevrolet" class="linkNav animate">CONSÓRCIO</a>
                </li>
                <li class="menu-item itemNav">
                  <a href="<?php echo get_home_url(); ?>/blog/" class="linkNav animate">BLOG</a>
                </li>
                <li class="menu-item itemNav">
                  <a href="<?php echo get_home_url(); ?>/depoimentos" class="linkNav animate">DEPOIMENTOS</a>
                </li>
                <li class="menu-item itemNav">
                  <a href="<?php echo get_home_url(); ?>/atendimento" class="linkNav animate">ATENDIMENTO</a>
                </li>

                <?php } ?>
             
            </ul>
          </div>
        </div>

        <div class="nav_main">
         
          <div id="bs-example-navbar-collapse-1 menu-top" class="menu collapse navbar-collapse">
            <ul id="menu-menu" class="nav navbar-nav">
           
              <?php if( is_home() && is_front_page() ): ?>
                 
                <li class="menu-item itemNav first">
                  <a href="#simulacao" class="linkNav scroll">SIMULAÇÃO</a>
                </li>
                <li class="menu-item itemNav">
                  <a href="#carros" class="linkNav scroll animate">VEÍCULOS</a>
                </li>
                <li class="menu-item itemNav">
                  <a href="#planos" class="linkNav scroll animate">PLANOS</a>
                </li>
                <li class="menu-item itemNav">
                  <a href="#consorcio" class="linkNav scroll animate">CONSÓRCIO</a>
                </li>
                <li class="menu-item itemNav">
                  <a href="#blog" class="linkNav scroll animate">BLOG</a>
                </li>
                <li class="menu-item itemNav">
                  <a href="#depoimentos" class="linkNav scroll animate">DEPOIMENTOS</a>
                </li>
                <li class="menu-item itemNav">
                  <a href="#atendimento" class="linkNav scroll animate">ATENDIMENTO</a>
                </li>
              <?php else: ?>

                <?php if( is_blog_content() ) { ?>


                <?php
                  $menu_name = 'navBlog';

                  if( wp_get_nav_menu_object($menu_name) != '' ) { 

                  $menu = wp_get_nav_menu_object($menu_name);
                  $menuitems = wp_get_nav_menu_items( $menu->term_id, array( 'order' => 'DESC' ) );
                ?>
                <li class="menu-item itemNav first">
                  <a href="<?php echo get_home_url(); ?>/blog" class="linkNav">INICIAL</a>
                </li>
                <?php
                  foreach( $menuitems as $item ):
                  // set up title and url
                  $title = $item->title;
                  $link = $item->url;
                  $class = $item->classes[0];
                ?>  
                <li class="menu-item itemNav <?php echo $class; ?>">
                  <a class="linkNav animate" href="<?php echo $link; ?>" title="<?php echo $title; ?>">
                    <?php echo $title; ?>
                  </a>
                </li>                       
                <?php  endforeach; ?>

                <?php } ?>

                <?php } else { ?>
                
                <li class="menu-item itemNav first">
                  <a href="<?php echo get_home_url(); ?>/simulacao" class="linkNav">SIMULAÇÃO</a>
                </li>
                <li class="menu-item itemNav">
                  <a href="<?php echo get_home_url(); ?>/veiculos" class="linkNav animate">VEÍCULOS</a>
                </li>
                <li class="menu-item itemNav">
                  <a href="<?php echo get_home_url(); ?>/planos" class="linkNav animate">PLANOS</a>
                </li>
                <li class="menu-item itemNav">
                  <a href="<?php echo get_home_url(); ?>/consorcio-chevrolet" class="linkNav animate">CONSÓRCIO</a>
                </li>
                <li class="menu-item itemNav">
                  <a href="<?php echo get_home_url(); ?>/blog/" class="linkNav animate">BLOG</a>
                </li>
                <li class="menu-item itemNav">
                  <a href="<?php echo get_home_url(); ?>/depoimentos" class="linkNav animate">DEPOIMENTOS</a>
                </li>
                <li class="menu-item itemNav">
                  <a href="<?php echo get_home_url(); ?>/atendimento" class="linkNav animate">ATENDIMENTO</a>
                </li>

                <?php } ?>

              <?php endif; ?>
            </ul> 
          </div>

        </div>

    </div><!-- container transition -->

    <div class="maskEffect"></div>

      <!-- <div class="btn-group servico_cliente transition effect">
        <button type="button" class="btn">Serviço ao Cliente</button>
        <button type="button" class="btn btn-small dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <span class="caret"></span>
          <span class="sr-only">Toggle Dropdown</span>
        </button>
        <ul class="dropdown-menu">
          <li><a href="#">Acessar meu Consórcio</a></li>
          <li><a href="#">2a via boleto</a></li>
          <li><a href="#">Datas de assembleias</a></li>
          <li><a href="#">Valores a devolver</a></li>
          <li><a href="#">Dúvidas Frequêntes</a></li>
        </ul>
      </div>  -->

    </div>
</header>
      