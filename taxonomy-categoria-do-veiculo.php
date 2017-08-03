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
	    <div class="container">
	      <div class="bloco__title-banner">
	        <h4 class="bloco-banner__titletopo">Veículo</h4>
	        <h2 class="bloco-banner__title bloco-banner__title--facil"><?php the_title() ?></h2>
	        <div class="bloco-banner__texto">
	          <?php echo $resumoPage; ?>
	        </div>
	        <?php get_template_part('template-parts/breadcrumb'); ?>
	      </div>
	    </div>  
    </div>
	
	<div class="container">

	<?php get_template_part('template-parts/category-products', 'list'); ?>	
		
	</div>
		
		 <?php 
        	//Include com listagem dos veículos
        	get_template_part('template-parts/products-veiculos','list');
      	?>


	    
</article>

<?php get_footer(); ?>