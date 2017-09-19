<?php get_header(); ?>



<?php if( isset( $_GET['post_type'] ) ) {

	$complemento_uri = '<input type="hidden" name="post_type" value="' . $_GET['post_type'] . '" />';

	} ?>



 <?php if( isset( $_GET['post_type'] ) &&  'post' === $_GET['post_type'] ) { 

 	get_template_part('template-parts/search','blog');

} else {

 ?>
	

<article class="search-global internas">
	

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

<?php get_template_part('template-parts/category-search', 'filter'); ?>

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
					 <form role="search" method="get" id="form_pesquisa" class="form formStyle intraColls searchFaq intraPadding_3" action="<?php echo esc_url( home_url( '/' ) ); ?>">
					 <?php echo $complemento_uri; ?>
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

			
			<?php
				if ( have_posts() ) :
			/* Start the Loop */
			echo '<ul class="nRow grid items border colls colls-2 vPadding hPadding faqList shadowHover min-height">';
			while ( have_posts() ) : the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				//get_template_part( 'template-parts/post/content', 'excerpt' );
				get_template_part('template-parts/search', 'global');

			endwhile; // End of the loop.
				echo '</ul>';

			// the_posts_pagination( array(
			// 	'prev_text' => twentyseventeen_get_svg( array( 'icon' => 'arrow-left' ) ) . '<span class="screen-reader-text">' . __( 'Previous page', 'twentyseventeen' ) . '</span>',
			// 	'next_text' => '<span class="screen-reader-text">' . __( 'Next page', 'twentyseventeen' ) . '</span>' . twentyseventeen_get_svg( array( 'icon' => 'arrow-right' ) ),
			// 	'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentyseventeen' ) . ' </span>',
			// ) );

			else : ?>
			<div class="olls colls-2 vPadding hPadding">
				<center>
				<p>
					<?php _e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'twentyseventeen' ); ?>
				
				</p>
				</center>
			</div>

			<?php endif; ?>

		

		


		<div class="nRow colls colls-full">
				<div class="coll barra greyscale hPadding vPadding">
				<p class="horario">Você conseguiu <strong>encontrar</strong> o que <strong>procurava?</strong>. Você pode nos enviar as suas dúvidas para <strong>contato@globoconsorcio.com.br</strong>.
				</div>
		</div>
			
		</main>



</article>

<?php } ?>


<?php get_template_part('template-parts/newsletter'); ?> 
<?php get_footer(); ?>