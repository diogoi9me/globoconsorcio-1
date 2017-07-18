<?php /*Template Name: veiculos */ ?>
<?php get_header(); ?>

<article class="page-veiculos">

	<div class="bloco-banner">
		<img src="<?php echo get_template_directory_uri(); ?>/assets/images/bkg-banner.png" alt="">
		<div class="container">
			<h2 class="bloco-banner__title"><?php the_title() ?></h2>
				
			<div class="bloco-banner__texto">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit.
			</div>
		</div>	
	</div>
	
	<div class="container">
		<div class="col-md-2">
			<div class="filtro filtro__ativo">
				<a href="#">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-all.png" alt="">
					<span class="filtro__title ">Todos</span>
				</a>
			</div>
		</div>
		<div class="col-md-1">
			<div class="bloco-opcoes__divisor"></div>
		</div>
		<div class="col-md-2">
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
	</div>
	<!--nossos carros-->

	<section class="nossos-carros effect" id="carros">

	  <div class="containe-owl">

	    <div class="row">

	        <div class="title-carousel">

	          <h2 class="title"><span>Nossos</span>Carros</h2>

	          <h6><a href="#" title="Ver todos">Ver todos</a></h6>

	        </div>

	    </div>

	    <div id="owl-carros" class="owl-carousel owl-theme">



	      <?php

	        $args = array( 'post_type' => 'oferta', 'posts_per_page' => 8, 'order' => 'ASC' );

	        $loop = new WP_Query( $args );



	          while ( $loop->have_posts() ) : $loop->the_post();

	    

	          $slug = basename(get_permalink());

	          $classItem = $slug;

	    

	            //Campos Personalizados

	            $preco = get_post_custom_values('wpcf-preco');

	            $preco = $preco[0];

	            $preco = number_format($preco, 2, ',', '.');



	            $parcelas = get_post_custom_values('wpcf-parcelas');

	            $parcelas = $parcelas[0];



	            $valorDaParcela = get_post_custom_values('wpcf-valor-da-parcela');

	            $valorDaParcela = $valorDaParcela[0];

	            $valorDaParcela = number_format($valorDaParcela, 2, ',', '.');

	      ?> 



	      <div class="item">

	        <h4><?php echo the_title(); ?></h4>

	        <a class="image" href="<?php echo get_permalink(); ?>" title="<?php echo the_title_attribute( 'echo=0' ); ?>" rel="bookmark">

	          <div class="info">

	            <figure class="hvr-grow wow zoomIn">

	              <?php 

	                imagem_destacada('full', 'wow pulse', get_the_title(), '')

	              ?>

	              <figcaption>

	                <span><?php echo $preco ?></span>

	                <strong><?php echo $parcelas . 'X de <strong>' . $valorDaParcela . '</strong>' ?></strong>

	              </figcaption>

	            </figure>



	            <?php trackButton('link', 'productView_'. get_the_ID(), 'Clicado', get_the_title(), get_post_permalink(), get_the_title(), 'productView_'. get_the_ID(), 'btn btn__carros wow zoomIn hvr-hollow', 'Simule aqui'); ?>

	          </div>

	        </a>

	      </div>

	      <?php endwhile; ?>   

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