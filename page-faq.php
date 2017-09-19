<?php /*Template Name: faq */ ?>
<?php get_header(); ?>

<article class="page-faq">
	<div class="bloco-banner animated fadeIn">
		<div class="container">
			<div class="bloco__title-banner">
				<h2 class="bloco-banner__title bloco-banner__title--chevrolet animated fadeIn"><?php the_title() ?></h2>
				<div class="bloco-banner__texto animated fadeIn">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
				</div>
				<?php get_template_part('template-parts/breadcrumb'); ?>
			</div>
		</div>	
	</div>
	
	
	<div class="bloco__filter">
  		<div class="container">
			<div class="col-md-5 col-xs-mobile">
				<div class="filtro contato">
					<a href="#">
						<span class="filtro__title ">Atendimento</span>
					</a>
				</div>
			</div>
			<div class="col-md-2 col-xs-mobile-separador">
				<div class="bloco-opcoes__divisor"></div>
			</div>
			<div class="col-md-5 col-xs-mobile">
				<div class="filtro duvida filtro__ativo">
					<a href="#">
						<span class="filtro__title ">Dúvidas Frequentes (FAQ)</span>
					</a>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-12">

		<div class="bloco-header bloco-header--faq">
			<h4 class="bloco-header__toptitle">O QUE VOCÊ ESTÁ</h4>
			<h2 class="bloco-header__title">PROCURANDO?</h2>

				<p class="bloco-header__subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt in magni veniam fugiat, at eum aliquam assumenda hic doloribus, perferendis quo velit eius, ipsum blanditiis ratione possimus qui!</p>
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

<?php get_template_part('template-parts/newsletter'); ?> 
<?php get_footer(); ?>