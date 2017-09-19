<section class="simulacao bottomPadding <?php if ( is_home() || is_front_page() ) { echo 'shadow'; } ?>" id="simulacao">
    <div class="container vPadding">
		<div class="nRow">

 <?php

        if( is_page('simulacao') ) {

        global $page;
		$slug_page=$page->post_name;

		//Busca dados no campo personalizado da Página
		$resumoPage = get_post_custom_values('wpcf-editor-html-texto');
		$resumoPage = $resumoPage[0];

		?>               

		<div class="bloco-header topPadding">
					<h4 class="bloco-header__toptitle">SOLICITAR UMA</h4>
					<h2 class="bloco-header__title">SIMULAÇÃO</h2>
					<p class="bloco-header__subtitle"><?php echo $resumoPage; ?></p>
		</div>

		<?php } else { ?>

		<h2 class="title"><span>Solicitar uma</span>Simulação</h2>

		<?php } ?>


          <?php echo do_shortcode( '[contact-form-7 id="362" title="Pedido de simulação - HOME - INTRO" html_class="form_simulacao"]' ); ?>
		</div>
	</div>
</section>