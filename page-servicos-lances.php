<?php /*Template Name: SERV | LANCES */ ?>
<?php get_header(); ?>

<?php 
	global $page;
	$slug_page=$page->post_name;

	//Busca dados no campo personalizado da Página
	$resumoPage = get_post_custom_values('wpcf-editor-html-texto');
	$resumoPage = $resumoPage[0];
?>


<article class="page-servicos internas lances">
	

	<div class="bloco-banner animated fadeIn">
	    <div class="container vPadding">
	      <div class="bloco__title-banner">
		      <div class="line line-1">
			        <div class="currentTitle">
		        		<h2 class="bloco-banner__title bloco-banner__title--facil animated fadeIn"><?php the_title() ?></h2>
		        	</div>
	        	</div>
	        	<div class="line line-2">
	        		<?php get_template_part('template-parts/breadcrumb'); ?>
	        	</div>
	      </div>
	    </div>  
  	</div>

		<header class="bloco-header vPadding iconYes">
			<i class="icon"></i>
			<h4 class="bloco-header__toptitle">OFERTAS DE</h4>
			<h2 class="bloco-header__title">LANCES</h2>
			<p class="bloco-header__subtitle"><?php echo $resumoPage; ?></p>
		</header>	

		<main class="mainContent">

		<?php get_template_part('template-parts/servicos', 'login'); ?>
		
		<?php get_template_part('template-parts/servicos', 'list'); ?>

		<?php get_template_part('template-parts/servicos', 'footer'); ?>
			
		</main>



</article>
<?php get_template_part('template-parts/newsletter'); ?> 
<?php get_footer(); ?>