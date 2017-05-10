<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php wp_title(); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<?php wp_head(); ?>
</head>

<body>
  <header class="navbar" id="header-top">
    <div class="container">
      <div class="tarja" id="tarja-header">
        <ul class="contato">
          <li><a href="#"><i class="icon-phone"></i><span class="ddd">(85)</span> 3031-3511</a></li>
          <li><a href="#"><i class="icon-volume-control-phone"></i>Nós ligamos para você</a></li>
        </ul>
        <span><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-fiat.png" alt="">Consórcio Nacional Chevrolet</span>

        <div class="btn-group servico_cliente">
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

        <ul class="redes">
          <li>
            <i class="icon-facebook" title="Facebook"></i>
            <i class="icon-instagram-1" title="Instagram"></i>
            <i class="icon-youtube-play" title="Youtube"></i>
          </li>
        </ul>
      </div>
      <h1 class="navbar-brand">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="Globo Consórcio.">
        </a>
      </h1>
      <a href="#menu" id="toggle"><span></span></a>
       <?php require_once('assets/includes/wp_bootstrap_navwalker.php'); ?>
      <?php
        wp_nav_menu( array(
            'menu'              => 'Menu',
            'theme_location'    => 'menu-header',
            'depth'             => 2,
            'container'         => 'div',
            'container_class'   => 'menu collapse navbar-collapse',
            'container_id'      => 'bs-example-navbar-collapse-1 menu-top',
            'menu_class'        => 'nav navbar-nav',
            'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
            'walker'            => new wp_bootstrap_navwalker())
          );
      ?>
      <i class="icon-search pesquisa" title="Pesquisar"></i>
        <form role="search" method="get" id="form_pesquisa" class="form_pesquisa_mobile" action="">
          <input type="text" class="transition mobile_search" name="texto_pesquisa" placeholder="Pesquise no Site" />
         </form>
  </div>
  </header>


