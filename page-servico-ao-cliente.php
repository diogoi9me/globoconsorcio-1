<?php /*Template Name: servico ao cliente */ ?>
<?php get_header(); ?>

<article class="page-servico-cliente">

	<div class="bloco-banner">
		<img src="<?php echo get_template_directory_uri(); ?>/assets/images/bkg-banner.png" alt="">
		<div class="container">
		
			<h2 class="bloco-banner__title bloco-banner__title--chevrolet"><?php the_title() ?></h2>
			<?php get_template_part('template-parts/breadcrumb'); ?>
		</div>	
	</div>

	<div class="bloco-opcoes">
		<div class="container">
			
			<div class="col-md-12">

				<div class="bloco-header bloco-header--faq">
					<h4 class="bloco-header__toptitle">Serviço ao Cliente do</h4>
					<h2 class="bloco-header__title">Consórcio Chevrolet</h2>

     				<p class="bloco-header__subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt in magni veniam fugiat, at eum aliquam assumenda hic doloribus, perferendis quo velit eius, ipsum blanditiis ratione possimus qui!</p>
				</div>

			</div>
		</div>
	</div>
	<div class="tarja-blue">
		<div class="container">
			<div class="col-md-3">
				<div class="tarja-blue__titles-left">
					<h4>Acesse o seu</h4>
					<h3>Consórcio</h3>
				</div>
			</div>
			
				<?php echo do_shortcode( '[contact-form-7 id="203" title="Acesso ao Consorcio"]' );  ?>
		
			<div class="col-md-3">
				<div class="tarja-blue__titles-right">
					<h4>Esqueci  minha Senha<br/>É o meu primeiro acesso</h4>
				</div>
			</div>
		</div>
	</div>
	
	<div class="container">
		
	
		<div class="cards">
			
			<div class="cards__item">
				<div class="cards__item-info">
					<div class="cards__item-imagem">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-boleto.png" alt="">
						<h3 class="cards__item-title">Investimento<br/> Seguro</h3>
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
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-datas.png" alt="">
						<h3 class="cards__item-title">Planos<br/> com até 84 meses</h3>
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


</article>

<?php get_footer(); ?>