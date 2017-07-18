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

		<!-- <div class="col-md-2">
			<div class="filtro">
				<a href="#">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-carros.png" alt="">
					<span class="filtro__title">Carros</span>
				</a>
			</div>
		</div>
		<div class="col-md-1">
			<div class="bloco-opcoes__divisor"></div>
		</div>
		<div class="col-md-2">
			<div class="filtro">
				<a href="#">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-suvs.png" alt="">
					<span class="filtro__title">Suvs</span>
				</a>
			</div>
		</div>
		<div class="col-md-1">
			<div class="bloco-opcoes__divisor"></div>
		</div>
		<div class="col-md-2">
			<div class="filtro">
				<a href="#">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-picape.png" alt="">
					<span class="filtro__title">Picapes</span>
				</a>
			</div>
		</div>
		 -->
	</div>
	<!--nossos carros-->

	<section class="nossos-carros effect" id="carros">

	  <div class="containe-owl">

	    <div class="row">

	        <div class="title-carousel">

	          <h2 class="title"><span>Nossos</span>Veículos</h2>

	          <p>Descrição do conteúdo a ser listado abaixo.</p>

	        </div>

	    </div>

	    <div id="owl-carros" class="owl-carousel owl-theme">


		 <?php 
        	//Include com listagem dos veículos
        	get_template_part('template-parts/page/products-veiculos','list');
      	?>


	    </div>

	  </div>
		<div class="col-md-12">
			<div class="btn-carregar-mais">
				<a href="#" title="carregar mais">Carregar Mais</a>
			</div>
		</div>
	</section>
</article>

<?php get_footer(); ?>