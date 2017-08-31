<?php /*Template Name: Depoimentos */ ?>
<?php get_header(); ?>

<?php 
	global $page;
	$slug_page=$page->post_name;

	//Busca dados no campo personalizado da Página
	$resumoPage = get_post_custom_values('wpcf-editor-html-texto');
	$resumoPage = $resumoPage[0];
?>

<article class="page-veiculos">
	<div class="bloco-banner animated fadeIn">
	    <div class="container">
	      <div class="bloco__title-banner">
		      <div class="line line-1">
			        <div class="currentTitle side">
		        		<h2 class="bloco-banner__title bloco-banner__title--facil animated fadeIn"><?php the_title() ?></h2>
		        	</div>
		        	<div class="bloco-banner__texto description animated fadeIn">
		         		<?php echo $resumoPage; ?>
		        	</div>
	        	</div>
	        	<div class="line line-2">
	        		<?php get_template_part('template-parts/breadcrumb'); ?>
	        	</div>
	      </div>
	    </div>  
  	</div>
	
	<header class="bloco-header">
			<h4 class="bloco-header__toptitle">As Opiniões</h4>
			<h2 class="bloco-header__title">dos Clientes</h2>
	</header>

	<div class="template-parts">
		<?php 
    	//Include com listagem dos veículos
    	get_template_part('template-parts/depoimentos','list');
  		?>
	</div>
		
  	<!-- <div class="carregar-mais">
			<a href="#" class="btn btn-carregar">Carregar Mais</a>
		
	</div>
	 -->
	    
</article>

<?php get_footer(); ?>