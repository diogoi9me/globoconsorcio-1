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
	        <div class="line line-1">
		        <div class="currentTitle side">
			        <h4 class="bloco-banner__titletopo">VEÍCULOS</h4>
			        <h2 class="bloco-banner__title bloco-banner__title--facil animated fadeIn"><?php single_term_title(); ?></h2>
			    </div>
		        <div class="bloco-banner__texto description animated fadeIn">
		          <?php echo term_description(); ?>
		        </div>
	        </div>
	        <div class="line line-2">
	        	<?php get_template_part('template-parts/breadcrumb'); ?>
	      	</div>
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