<?php /*Template Name: faq */ ?>
<?php get_header(); ?>

<article class="page-faq">
	<div class="bloco-banner">
		<img src="<?php echo get_template_directory_uri(); ?>/assets/images/bkg-banner.png" alt="">
		<div class="container">
		
			<h2 class="bloco-banner__title bloco-banner__title--chevrolet"><?php the_title() ?></h2>

		</div>	
	</div>
	<div class="bloco-opcoes">
		<div class="container">
			<div class="col-md-5 col-xs-mobile">

				<div class="bloco-opcoes__opcao-vantagem">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-atendimento.png" alt="">
					<h5 class="bloco-opcoes__title ">Atendimento</h5>
				</div>

			</div>
			<div class="col-md-2 col-xs-mobile-separador">
				<div class="bloco-opcoes__divisor"></div>
			</div>
			<div class="col-md-5 col-xs-mobile">

				<div class="bloco-opcoes__opcao-sobre">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-duvidas.png" alt="">
					<h5 class="bloco-opcoes__title bloco-opcoes__title-ativo">Dúvidas Frequentes (FAQ)</h5>
				</div>

			</div>
			<div class="col-md-12">

				<div class="bloco-header bloco-header--faq">
					<h4 class="bloco-header__toptitle">O QUE VOCÊ ESTÁ</h4>
					<h2 class="bloco-header__title">PROCURANDO?</h2>

     				<p class="bloco-header__subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt in magni veniam fugiat, at eum aliquam assumenda hic doloribus, perferendis quo velit eius, ipsum blanditiis ratione possimus qui!</p>
				</div>

			</div>
		</div>
	</div>
	<div class="tarja-blue">
		<div class="container">
			<div class="tarja-blue__bloco">
				<div class="tarja-blue__pesquisa">
					<input type="text" placeholder="Digite aqui a sua dúvida...">
					<a href="#"><i class="icon-search-light"></i>Pesquisar</a>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="cards">
				
				<div class="cards__item">
					<div class="cards__item-info">
						<div class="cards__item-imagem">
							<h4 class="cards-info__title">Título exemplo de pergunta Frequente, escrito em até duas linhas.</h4>
						</div>
						<div class="bloco-cards-info__conteudo">
							
							<p>Resposta teste e tal chegou a hora de você ser dono daquele carro que sempre sonhou, pagando em até 84 vezes, sem juros e sem etrada.</p>
						</div>
					</div>
				</div>
				<div class="cards__item">
					<div class="cards__item-info">
						<div class="cards__item-imagem">
							<h4 class="cards-info__title">Título exemplo de pergunta Frequente, escrito em até duas linhas.</h4>
						</div>
						<div class="bloco-cards-info__conteudo">
							
							<p>Resposta teste e tal chegou a hora de você ser dono daquele carro que sempre sonhou, pagando em até 84 vezes, sem juros e sem etrada.</p>
						</div>
					</div>
				</div>
				
				
			</div>
		</div>
	</div>
	<!-- <div class="cards-info">
		<div class="container">

			<div class="cards-info__bloco-info">
				<h4 class="cards-info__title">Título exemplo de pergunta Frequente, escrito em até duas linhas.</h4>
				<p class="cards-info__subtitle">Resposta teste e tal chegou a hora de você ser dono daquele carro que sempre sonhou, pagando em até 84 vezes, sem juros e sem etrada.</p>
			</div>
			<div class="cards-info__bloco-info">
				<h4 class="cards-info__title">Título exemplo de pergunta Frequente, escrito em até duas linhas.</h4>
				<p class="cards-info__subtitle">Resposta teste e tal chegou a hora de você ser dono daquele carro que sempre sonhou, pagando em até 84 vezes, sem juros e sem etrada.</p>
			</div>
			<div class="cards-info__bloco-info">
				<h4 class="cards-info__title">Título exemplo de pergunta Frequente, escrito em até duas linhas.</h4>
				<p class="cards-info__subtitle">Resposta teste e tal chegou a hora de você ser dono daquele carro que sempre sonhou, pagando em até 84 vezes, sem juros e sem etrada.</p>
			</div>
			<div class="cards-info__bloco-info">
				<h4 class="cards-info__title">Título exemplo de pergunta Frequente, escrito em até duas linhas.</h4>
				<p class="cards-info__subtitle">Resposta teste e tal chegou a hora de você ser dono daquele carro que sempre sonhou, pagando em até 84 vezes, sem juros e sem etrada.</p>
			</div>

		</div>
	</div> -->




</article>


<?php get_footer(); ?>