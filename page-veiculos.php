<?php /*Template Name: veiculos */ ?>
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
	        <h2 class="bloco-banner__title bloco-banner__title--facil animated fadeIn"><?php the_title() ?></h2>
	        <div class="bloco-banner__texto  animated fadeIn">
	         	<?php echo $resumoPage; ?>
	        </div>
	        	<?php get_template_part('template-parts/breadcrumb'); ?>
	      </div>
	    </div>  
  	</div>
	

	<?php get_template_part('template-parts/category-products', 'list'); ?>

	<div class="template-parts">
		<?php 
    	//Include com listagem dos veículos
    	get_template_part('template-parts/products-veiculos','list');
  		?>
	</div>
		
  	<div class="carregar-mais">
			<a href="#" class="btn btn-carregar">Carregar Mais</a>
		
	</div>
	
	    
</article>

<?php get_footer(); ?>