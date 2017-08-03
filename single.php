<?php /*Template Name: veiculo single*/ ?>
<?php get_header(); ?>

<article class="page-single-veiculos">
	<div class="bloco-banner animated fadeIn">
	    <div class="container">
	      <div class="bloco__title-banner">
	        <h4 class="bloco-banner__titletopo">Veículos</h4>
	        <h2 class="bloco-banner__title bloco-banner__title--veiculo animated fadeIn"><?php the_title() ?></h2>
	        <div class="bloco-banner__veiculo animated fadeIn">
  				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/veiculo.png" alt="">		
  			</div>
	        <div class="bloco-banner__texto bloco-banner__texto--veiculo animated fadeIn">
	          <p>CARTA DE CRÉDITO EQUIVALENTE A 65% DO VALOR DO VEÍCULO.</p>
	        </div>
	        <div class="bloco-banner__texto-right animated fadeIn">
  				<p>R$ <strong>25.734,00</strong></p>
  				<p>84 X R$ <strong>392,00</strong></p>
  			</div>	
	        <?php get_template_part('template-parts/breadcrumb'); ?>
	      </div>
	    </div>  
  	</div>
	

  	<div class="bloco__simulacao bloco__simulacao--single animated fadeInUp">
			<div class="bloco-header bloco-header--simulacao bloco-header--simulacao-single">
				<h2 class="bloco-header__title bloco-header__title--simulacao bloco-header__title--single">SOLICITE UMA SIMULAÇÃO JÁ!</h2>
			</div>
			<div>
				<?php echo do_shortcode('[contact-form-7 id="189" title="Pedido de simulação Página Consorcio Chevrolet_copy"] ');?>
			</div>
		</div>

  	<div class="container-single">
  		<div class="bloco__filter">
		  	<div class="container">
				<div class="col-md-2 col-xs-mobile mobile-separador-border">
					<div class="filtro filtro__ativo">
						<a href="#" class="filtro__link">
							<span class="filtro__valor">100%</span>
							<span class="filtro__title filtro__title--single">Do valor do cargo</span>
						</a>
					</div>
				</div>
				<div class="col-md-1 mobile-separador-none">
					<div class="bloco-opcoes__divisor"></div>
				</div>
				<div class="col-md-2 col-xs-mobile mobile-separador-border">
					<div class="filtro">
						<a href="#" class="filtro__link">
							<span class="filtro__valor">100%</span>
							<span class="filtro__title filtro__title--single">Do valor do cargo</span>
						</a>
					</div>
				</div>
				<div class="col-md-1 mobile-separador-none">
					<div class="bloco-opcoes__divisor"></div>
				</div>
				<div class="col-md-2 col-xs-mobile mobile-separador-border">
					<div class="filtro">
						<a href="#" class="filtro__link">
							<span class="filtro__valor">100%</span>
							<span class="filtro__title filtro__title--single">Do valor do cargo</span>
						</a>
					</div>
				</div>
				<div class="col-md-1 mobile-separador-none">
					<div class="bloco-opcoes__divisor"></div>
				</div>
				<div class="col-md-2 col-xs-mobile mobile-separador-border">
					<div class="filtro">
						<a href="#" class="filtro__link">
							<span class="filtro__valor">100%</span>
							<span class="filtro__title filtro__title--single">Do valor do cargo</span>
						</a>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="bloco__post">
				<h2 class="bloco__post-title">Conheça os detalhes do chevrolet onix joy</h2>
				<p class="bloco__post-subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium sapiente delectus libero. At facilis quas fuga veritatis unde doloremque aspernatur consequuntur neque distinctio nesciunt adipisci, harum optio dicta aut ducimus.</p>
				<div class="bloco__post-card">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/img-post.png" alt="">
					<div class="bloco__post-card-info">
						<h2 class="bloco__post-card-info-title">Performace</h2>
						<h6 class="bloco__post-card-info-subtitle">Desempenho e conforto para os dias de hoje.</h6>
						<p class="bloco__post-card-info-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos repellendus distinctio possimus, rem reprehenderit minus optio quos consectetur deserunt ad quisquam architecto atque natus commodi! Consectetur similique laborum, reiciendis assumenda.</p>
					
					</div>
				</div>
			</div>
		</div>
	</div>
  	


</article>
<?php get_footer(); ?>