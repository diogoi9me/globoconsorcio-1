<?php get_header(); ?>
<article class="page-atendimento faq internas">
	

	<div class="bloco-banner animated fadeIn">
	    <div class="container vPadding">
	      <div class="bloco__title-banner">
		      <div class="line line-1">
			        <div class="currentTitle">
		        		<h2 class="bloco-banner__title bloco-banner__title--facil animated fadeIn">RESULTADO DA BUSCA</h2>
		        	</div>
	        	</div>
	        	<div class="line line-2">
	        		<?php get_template_part('template-parts/breadcrumb'); ?>
	        	</div>
	      </div>
	    </div>  
  	</div>


		<header class="bloco-header">
		<?php if ( have_posts() ) : ?>
			<h4 class="bloco-header__toptitle">RESULTADO DA</h4>
			<h2 class="bloco-header__title">BUSCA NO SITE</h2>
		<?php else : ?>
			<h4 class="bloco-header__toptitle">A BUSCA RETORNOU</h4>
			<h2 class="bloco-header__title">SEM RESULTADO</h2>
		<?php endif; ?>
		</header>

		

		<main class="mainContent">

		<div class="nRow colls colls-full">
				<div class="coll barra blue hPadding vPadding">
					 <form role="search" method="get" id="form_pesquisa" class="form_pesquisa_mobile" action="<?php echo esc_url( home_url( '/' ) ); ?>">
					<fieldset>
						<p class="coll coll-main">
							<label>VOCÊ PESQUISOU POR:</label>
							<input type="search"  name="s" placeholder="<?php echo $_GET['s']; ?>" />
						</p>
						<p class="coll coll-side call2action">
							<input type="submit" class="buttonSend animate" value="ATUALIZAR" />
						</p>
					</form>	
				</div>
		</div>
		<ul class="nRow grid items border colls colls-2 vPadding hPadding faqList shadowHover">
			

			<?php
				if ( have_posts() ) :
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				//get_template_part( 'template-parts/post/content', 'excerpt' );
				get_template_part('template-parts/search', 'global');

			endwhile; // End of the loop.

			// the_posts_pagination( array(
			// 	'prev_text' => twentyseventeen_get_svg( array( 'icon' => 'arrow-left' ) ) . '<span class="screen-reader-text">' . __( 'Previous page', 'twentyseventeen' ) . '</span>',
			// 	'next_text' => '<span class="screen-reader-text">' . __( 'Next page', 'twentyseventeen' ) . '</span>' . twentyseventeen_get_svg( array( 'icon' => 'arrow-right' ) ),
			// 	'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentyseventeen' ) . ' </span>',
			// ) );

			else : ?>

			<p><?php _e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'twentyseventeen' ); ?></p>

			<?php endif; ?>


		<div class="nRow colls colls-full">
				<div class="coll barra greyscale hPadding vPadding">
				<p class="horario">Você conseguiu <strong>encontrar</strong> o que <strong>procurava?</strong>. Você pode nos enviar as suas dúvidas para <strong>contato@globoconsorcio.com.br</strong>.
				</div>
		</div>
			
		</main>



</article>
<?php get_template_part('template-parts/newsletter'); ?> 
<?php get_footer(); ?>