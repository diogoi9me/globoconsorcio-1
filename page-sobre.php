<?php /*Template Name: sobre */ ?>
<?php get_header(); ?>


<article class="page-sobre">

	<div class="bloco-banner">
		<img src="<?php echo get_template_directory_uri(); ?>/assets/images/bkg-banner.png" alt="">
		<div class="container">
			<h4 class="bloco-banner__toptitle">Entenda o Consórcio</h4>
			<h2 class="bloco-banner__title bloco-banner__title--sobre"><?php the_title() ?></h2>	
			<?php get_template_part('template-parts/breadcrumb'); ?>
		</div>	
	</div>

	<div class="bloco-opcoes">
		<div class="container">
			<div class="col-md-5 col-xs-mobile">

				<div class="bloco-opcoes__opcao-vantagem">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-ativo.png" alt="">
					<h5 class="bloco-opcoes__title bloco-opcoes__title-ativo">Vantagens do <br/> Consórcio Chevrolet</h5>
				</div>

			</div>
			<div class="col-md-2 col-xs-mobile-separador">
				<div class="bloco-opcoes__divisor"></div>
			</div>
			<div class="col-md-5 col-xs-mobile">

				<div class="bloco-opcoes__opcao-sobre">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-inativo.png" alt="">
					<h5 class="bloco-opcoes__title">Sobre a Globo <br/> Consorcio</h5>
				</div>

			</div>
			<div class="col-md-12">

				<div class="bloco-header">
					<h4 class="bloco-header__toptitle">Globo Consórcio</h4>
					<h2 class="bloco-header__title">TÍTULO EXEMPLO EXEMPLO</h2>

     				<p class="bloco-header__subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt in magni veniam fugiat, at eum aliquam assumenda hic doloribus, perferendis quo velit eius, ipsum blanditiis ratione possimus qui!</p>
				</div>

			</div>
		</div>
	</div>


	<div class="sobre__info">
		<div class="container">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/aspas-white.png" alt="">
			<p class="sobre__info--conteudo">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo numquam asperiores, accusamus voluptatem amet quo. Sed fugit ipsum aliquam, veniam nam tempore cumque? Dolores nemo, error quae temporibus ipsum eius!</p>
		</div>
	</div>
	
	<div class="container">
		
	
		<div class="cards">
			
			<div class="cards__item">
				<div class="cards__item-info">
					<div class="cards__item-imagem">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-sobre.png" alt="">
						<h3 class="cards__item-title">Mais de 20 anos<br/> de globo consorcio</h3>
					</div>
					<div class="bloco-cards-info__conteudo">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit
						Lorem ipsum dolor sit amet, consectetur adipisicing elit sit amet, consectetur adipisicing elit....</p>
						<br/>
						<ul>
							<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
							<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
							<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
							<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="cards__item">
				<div class="cards__item-info">
					<div class="cards__item-imagem">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-sobre.png" alt="">
						<h3 class="cards__item-title">Mais de 20 anos<br/> de globo consorcio</h3>
					</div>
					<div class="bloco-cards-info__conteudo">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit
						Lorem ipsum dolor sit amet, consectetur adipisicing elit sit amet, consectetur adipisicing elit....</p>
						<br/>
						<ul>
							<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
							<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
							<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
							<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
						</ul>
					</div>
				</div>
			</div>
			
		</div>
	</div>




	
<!--opiniões dos nossos clientes -->

<section class="nossos-carros effect" id="depoimentos">

  <div class="containe-owl">

    <div class="row">

        <div class="title-carousel">

          <h2 class="title"><span>Opniões dos</span>Nossos Clientes</h2>

          <h6><a href="#" title="Ver Todos">Ver todos</a></h6>

        </div>

    </div>

    <div id="owl-opinioes" class="owl-carousel owl-theme">

       

      <?php

        $args = array( 'post_type' => 'depoimento', 'posts_per_page' => 8, 'order' => 'ASC' );

        $loop = new WP_Query( $args );



          while ( $loop->have_posts() ) : $loop->the_post();

    

          $slug = basename(get_permalink());

          $classItem = $slug;

    

            //Campos Personalizados

            $atividade = get_post_custom_values('wpcf-atividade-social');

            $atividade = $atividade[0];



            $carro = get_post_custom_values('wpcf-carro-comprado');

            $carro = $carro[0];



            $prazo = get_post_custom_values('wpcf-prazo-de-contemplacao');

            $prazo = $prazo[0];

      ?> 



      <div class="item">

        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/aspas.png" alt="">

       <p><?php echo get_the_content(); ?></p>

        <h6><?php echo get_the_title(); ?><span><?php echo $atividade; ?></span></h6>

        <div class="info">

          <figure>

            <?php 

                imagem_destacada('thumbnail', 'wow zoomIn', get_the_title(), '');

              ?>

            <figcaption>

              <h6><?php echo $carro; ?></h6>

              <i class="stars"></i><span>Contemplado no <?php echo $prazo; ?>° mês</span>

            </figcaption>

          </figure>

        </div>

      </div>

      <?php endwhile; ?>  

    </div>

  </div>

</section>






</article>

<?php get_footer(); ?>