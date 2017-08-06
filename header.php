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

  <div id="layer-transparent" class="layer-searc" >
    <header class="navbar transition" id="header-top">
      <div class="tarja transition effect" id="tarja-header">
        <ul class="contato">
          <li><a href="#"><i class="icon-phone"></i><span class="ddd">(85)</span> 3031-3511</a></li>
          <li><a href="#"><i class="icon-volume-control-phone"></i>Nós ligamos para você</a></li>
        </ul>
        <div class="text_center">
          <i class="icon-fiat"></i><span>Consórcio Nacional Chevrolet</span>
        </div>
        <ul class="redes effect">
          <li>
            <a href="https://www.facebook.com/globoconsorcio" title="Facebook"><i class="icon-facebook"></i></a>
             <a href="https://www.instagram.com/sigagloboconsorcio/" title="Instagram"><i class="icon-instagram-1"></i></a>
            <i class="icon-youtube-play icon--youtube-play" title="Youtube"></i>
          </li>
        </ul>
      </div>
      <div class="container transition">
        <span class="icon-pesquisa pesquisa transition" title="Pesquisar"></span>  
        <div class="busca-top">
          <form role="search" method="get" id="form_pesquisa" class="form_pesquisa_mobile" action="">
            <input type="text" class="transition mobile_search" name="texto_pesquisa" placeholder="Pesquise no Site" />
            <button type="submit" class="icon-pesquisa pesquisa--mobile"></button>
          </form>
        </div>
        <div class="navbar-brand transition">
          <?php if( is_home() || is_front_page() ): ?>
            <a class="link-up" href="#home">
              <i class="icon-logo"></i>
            </a>
          <?php else: ?>
          
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
               <i class="icon-logo"></i>
            </a>
          <?php endif; ?>
        </div>
        <?php require_once('assets/includes/wp_bootstrap_navwalker.php'); ?>
        <div class="nav_mobile">
          <a href="#menu" id="toggle"><span></span></a>

           <?php 
          /* wp_nav_menu( 
              array(
                'menu'              => 'nav_mobile',
                //'theme_location'    => 'menu-header',
                'depth'             => 2,
                'container'         => 'div',
                'container_class'   => 'menu collapse navbar-collapse',
                'container_id'      => 'bs-example-navbar-collapse-1 menu-top',
                'menu_class'        => 'nav navbar-nav',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker())
              );*/
            ?>
             
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
                  <a href="<?php echo get_home_url(); ?>/consorcio" class="linkNav animate">CONSÓRCIO</a>
                </li>
                <li class="menu-item itemNav">
                  <a href="<?php echo get_home_url(); ?>/blog" class="linkNav animate">BLOG</a>
                </li>
                <li class="menu-item itemNav">
                  <a href="<?php echo get_home_url(); ?>/depoimentos" class="linkNav animate">DEPOIMENTOS</a>
                </li>
                <li class="menu-item itemNav">
                  <a href="<?php echo get_home_url(); ?>/atendimento/contatos" class="linkNav animate">ATENDIMENTO</a>
                </li>
              <?php endif; ?>  
            </ul>
          </div>
        </div>
      

      
        <div class="nav_main">
          <?php  
          /*wp_nav_menu( 

              array(
                'menu'              => 'Menu',
                //'theme_location'    => 'menu-header',
                'depth'             => 2,
                'container'         => 'div',
                'container_class'   => 'menu collapse navbar-collapse',
                'container_id'      => 'bs-example-navbar-collapse-1 menu-top',
                'menu_class'        => 'nav navbar-nav',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker())
              );*/
              
          ?>
         
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
                <a href="<?php echo get_home_url(); ?>/consorcio" class="linkNav animate">CONSÓRCIO</a>
              </li>
              <li class="menu-item itemNav">
                <a href="<?php echo get_home_url(); ?>/blog" class="linkNav animate">BLOG</a>
              </li>
              <li class="menu-item itemNav">
                <a href="<?php echo get_home_url(); ?>/depoimentos" class="linkNav animate">DEPOIMENTOS</a>
              </li>
              <li class="menu-item itemNav">
                <a href="<?php echo get_home_url(); ?>/atendimento/contatos" class="linkNav animate">ATENDIMENTO</a>
              </li>
            <?php endif; ?>
          </ul> 
        </div>
      </div>
    </div>

      <div class="btn-group servico_cliente transition effect">
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
      </div> 

    </div>
</header>
      