<?php /*Template Name: atendimento */ ?>
<?php get_header(); ?>


<article class="page-atendimento">

	<div class="bloco-banner">
		<img src="<?php echo get_template_directory_uri(); ?>/assets/images/bkg-banner.png" alt="">
		<div class="container">
			<h4 class="bloco-banner__toptitle">Central de Atendimento</h4>
			<h2 class="bloco-banner__title bloco-banner__title--chevrolet"><?php the_title() ?></h2>	
			<?php get_template_part('template-parts/breadcrumb'); ?>
		</div>	
	</div>

	<div class="bloco-opcoes">
		<div class="container">
			<div class="col-md-5 col-xs-mobile">

				<div class="bloco-opcoes__opcao-vantagem">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-ativo.png" alt="">
					<h5 class="bloco-opcoes__title bloco-opcoes__title-ativo">Contatos</h5>
				</div>

			</div>
			<div class="col-md-2 col-xs-mobile-separador">
				<div class="bloco-opcoes__divisor"></div>
			</div>
			<div class="col-md-5 col-xs-mobile">

				<div class="bloco-opcoes__opcao-sobre">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-inativo.png" alt="">
					<h5 class="bloco-opcoes__title">Dúvidas Frequentes(FAQ)</h5>
				</div>

			</div>
			<div class="col-md-12">

				<div class="bloco-header">
					<h4 class="bloco-header__toptitle">Nossos</h4>
					<h2 class="bloco-header__title">Contatos</h2>
				</div>

			</div>

			
		</div>
	</div>

	<!--central de atendimento-->

	<section class="atendimento atendimento--interno effect" id="atendimento">

	  <div class="container">

	   

	      <div class="form">

	        <i class="icon-mail"></i><h4>Fale conosco</h4>

	        <?php echo do_shortcode( '[contact-form-7 id="18" title="Fale Conosco"] ' ); ?>

	      </div>

	  </div>

	</section>
			
	<section class="maps">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3981.099927319299!2d-38.49058838524087!3d-3.7884224972439657!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7c74f616e77fe93%3A0x2fa56ee94a69b0ea!2sI9ME+Web+%26+Design!5e0!3m2!1spt-BR!2sbr!4v1499565845441" width="100%" height="450" frameborder="0" style="display:block; border:0" allowfullscreen></iframe>
	</section>

</article>

<?php get_footer(); ?>