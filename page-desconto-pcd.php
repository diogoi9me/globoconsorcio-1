<?php /*Template Name: desconto para pcd */ ?>
<?php get_header(); ?>


<article class="page-desconto">
	
	<div class="bloco-banner animated fadeIn">
	    <div class="container">
	      <div class="bloco__title-banner">
	      	<h4 class="bloco-banner__titletopo">Entenda o Consórcio</h4>
	        <h2 class="bloco-banner__title bloco-banner__title--facil animated fadeIn"><?php the_title() ?></h2>
	        <?php get_template_part('template-parts/breadcrumb'); ?>
	      </div>
	    </div>  
  	</div>

		<div class="bloco-opcoes">
			<div class="container">
				
				
	<div class="bloco__filter v2">
	  <div class="container colls colls-2 separator">
	   
	      <div class="filtro coll vantagem filtro__ativo">
	        <a href="<?php echo get_home_url(); ?>/consorcio-chevrolet/">
	          <span class="filtro__title ">Vantagens do <br/> Consórcio Chevrolet</span>
	        </a>
	      </div>
	    


		
	      <div class="filtro coll sobre">
	        <a href="<?php echo get_home_url(); ?>/sobre-a-globo-consorcio/">
	          <span class="filtro__title ">Sobre a Globo <br/> Consorcio</span>
	        </a>
	      </div>
	   
	   
	 
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