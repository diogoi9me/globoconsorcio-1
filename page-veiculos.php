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

		<div class="col-md-2">
			<div class="filtro filtro<?php if( !is_tax() ) { echo '__ativo'; } ?>">
				<a href="#">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-all.png" alt="">
					<span class="filtro__title ">Todos</span>
				</a>
			</div>
		</div>

		<?php 
		
			//Organizando o filtro para listagem das categorias
			$args = array( 'hide_empty' => '0', 'order' => 'ASC' );
			$terms = get_terms( 'categoria-do-veiculo', $args );


			//Listando as categorias
			if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) {

			foreach ( $terms as $term ) {

			$termLink = esc_url( get_term_link( $term ) );

		?>
		<div class="col-md-1">
			<div class="bloco-opcoes__divisor"></div>
		</div>
		<div class="col-md-2">
			<div class="filtro filtro">
				<a href="<?php echo $termLink; ?>">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-all.png" alt="">
					<span class="filtro__title "><?php echo $term->name; ?></span>
				</a>
			</div>
		</div>
		
		<?php } } ?>
	</div>
		
		 <?php 
        	//Include com listagem dos veículos
        	get_template_part('template-parts/products-veiculos','list');
      	?>


	    
</article>

<?php get_footer(); ?>