<?php /*Template Name: veiculo single*/ ?>
<?php get_header(); ?>

<article class="page-single-veiculos">
	<div class="bloco-banner animated fadeIn">
	    <div class="container">
	      <div class="bloco__title-banner">
	        
	       
	        <div class="line line-1">
		        <div class="currentTitle side">
		        	<h4 class="bloco-banner__titletopo">PLANOS</h4>
		        	<h2 class="bloco-banner__title bloco-banner__title--veiculo animated fadeIn"><?php echo get_the_title() ?></h2>
		        </div>

		        
			        <div class="bloco-banner__texto description animated fadeIn">
                		<?php echo get_the_excerpt(); ?>
              		</div>

  			</div>

	        <div class="line line-2">
	        	<?php get_template_part('template-parts/breadcrumb'); ?>
			</div>
	      </div>
	    </div>  
  	</div>

  		<header class="bloco-header">
			<h4 class="bloco-header__toptitle">CONHEÇA O</h4>
			<h2 class="bloco-header__title"><?php echo get_the_title(); ?></h2>
			<p class="bloco-header__subtitle"><?php echo get_the_excerpt(); ?></p>
		</header>
  		
  		<main class="vPadding bottomPadding">
  		<?php the_content(); ?>
  		</main>
  	
  	<div class="container">
		<div class="area-info__simulacao">
			<div class="bloco__simulacao">
				<div class="bloco-header bloco-header--simulacao">
					<h2 class="bloco-header__title bloco-header__title--simulacao">Solicite a <strong>simulação</strong> do seu<br/><strong>desconto</strong>, agora! </h2>
				</div>
				<div>
					<?php echo do_shortcode('[contact-form-7 id="180" title="Pedido de simulação_copy"] ');?>
				</div>
			</div>
		</div>
	</div>

	<div class="outros-planos">
		<h2 class="outros-planos__title">Conheça outros <strong>Planos</strong></h2>

		  <!--nossos planos-->

		  <section class="nossos-planos effect" id="planos">

		    <div class="container"> 

		    



		      <?php  get_template_part('template-parts/planos', 'list'); ?>

		    </div>

		  </section>
	</div>


</article>
<?php get_footer(); ?>