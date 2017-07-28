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

	<div class="bloco-banner">
		<img src="<?php echo get_template_directory_uri(); ?>/assets/images/bkg-banner.png" alt="">
		<div class="container">
			
				<h2 class="bloco-banner__title">

				<?php the_title() ?>
					
				</h2>
				<?php get_template_part('template-parts/breadcrumb'); ?>
				<div class="bloco-banner__texto">
					<?php echo $resumoPage; ?>
				</div>
			
		</div>	
	</div>
	
	<div class="container">

		<?php get_template_part('template-parts/category-products', 'list'); ?>

	</div>
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