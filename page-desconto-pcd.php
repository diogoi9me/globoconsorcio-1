<?php /*Template Name: desconto para pcd */ ?>
<?php get_header(); ?>


<article class="page-desconto">

	<div class="bloco-banner">
		<img src="<?php echo get_template_directory_uri(); ?>/assets/images/bkg-banner.png" alt="">
		<div class="container">
			<h4 class="bloco-banner__toptitle">Entenda o Consórcio</h4>
			<h2 class="bloco-banner__title bloco-banner__title--chevrolet"><?php the_title() ?></h2>
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
						<h4 class="bloco-header__toptitle">Como Obter</h4>
						<h2 class="bloco-header__title">Descontos para PCD</h2>

	     				<p class="bloco-header__subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt in magni veniam fugiat, at eum aliquam assumenda hic doloribus, perferendis quo velit eius, ipsum blanditiis ratione possimus qui!</p>
					</div>

				</div>

				<div class="col-md-12">
					<div class="page-consorcio__img">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/imgg.png" alt="">
					</div>
				</div>	

				<div class="col-md-8">
					
					<div class="bloco-left">
						<h4 class="bloco-left__title">VEÍCULOS ACESSÍVEIS PARA TODOS</h4>
						<div class="bloco-left__card">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/imgg.png" alt="">
							<div class="bloco-left__content">
								<p>Para a Chevrolet, uma sociedade ideal é construída através do respeito e da cidadania e, também, por meio da igualdade de oportunidades oferecidas às pessoas.</p>
								<br/>
								Pensando assim, a Chevrolet oferece a maior gama de modelos automáticos para garantir a inclusão de motoristas 		especiais, e a linha mais completa de veículos para o transporte de pessoas com mobilidade reduzida....
							</div>
						</div>

						<div class="bloco__simulacao">
							<div class="bloco-header bloco-header--simulacao">
								<h2 class="bloco-header__title bloco-header__title--simulacao">Solicite a <strong>simulação</strong> <span>do seu<strong>desconto</strong>, agora! </span></h2>
							</div>
							<div>
								<?php echo do_shortcode('[contact-form-7 id="180" title="Pedido de simulação_copy"] ');?>
							</div>
						</div>
							
					</div>

				</div>
				<div class="col-md-4">
					
					<div class="bloco-right">
						<h4 class="bloco-right__title">CONHEÇA A TABELA DE COBERTURA</h4>
						<div class="bloco-right__content">
							<p>Para se enquadrar nesta categoria o consumidor deve providenciar os seguintes documentos:</p>
							<br/>
							<ul>
								<li>Alguns Tipos de Câncer</li>
								<li>Amputação</li>
								<li>Artrite Reumatóide</li>
								<li>Artrodese</li>
								<li>Artrogripose</li>
								<li>Artrose</li>
								...
							</ul>
						</div>
					</div>

				</div>
				

			</div>
		</div>
	
</article>

<?php get_footer(); ?>