<?php /*Template Name: SIMULAÇÃO */ ?>
<?php get_header(); ?>

<?php 
  // global $page;
  // $slug_page=$page->post_name;

  // //Busca dados no campo personalizado da Página
  // $resumoPage = get_post_custom_values('wpcf-editor-html-texto');
  // $resumoPage = $resumoPage[0];
?>

<article class="page-simulacao light">
	<div class="bloco-banner animated fadeIn">
	    <div class="container vPadding">
	      <div class="bloco__title-banner">
		      <div class="line line-1">
			        <div class="currentTitle">
		        		<h2 class="bloco-banner__title bloco-banner__title--facil animated fadeIn"><?php the_title() ?></h2>
		        	</div>
		        	<!-- <div class="bloco-banner__texto description animated fadeIn">
		         		<?php // echo $resumoPage; ?>
		        	</div> -->
	        	</div>
	        	<div class="line line-2">
	        		<?php get_template_part('template-parts/breadcrumb'); ?>
	        	</div>
	      </div>
	    </div>  
  	</div>
  		<?php get_template_part('template-parts/solicitar-simulacao'); ?>
	<div class="template-parts">
		<?php 
    	//Include com listagem dos veículos
    	get_template_part('template-parts/products-veiculos','list');
  		?>
	</div>
	<!-- 	
  	<div class="carregar-mais">
			<a href="#" class="btn btn-carregar">Carregar Mais</a>
		
	</div> -->
	
	    
</article>
<?php get_template_part('template-parts/newsletter'); ?> 
<?php get_footer(); ?>