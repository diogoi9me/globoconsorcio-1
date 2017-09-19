<?php /*Template Name: BLOG */ ?>
<?php get_header(); ?>

<?php 
	global $page;
	$slug_page=$page->post_name;

	//Busca dados no campo personalizado da Página
	$resumoPage = get_post_custom_values('wpcf-editor-html-texto');
	$resumoPage = $resumoPage[0];
?>


<article class="page-blog internas leftMain blogContainer">
	

	<div class="bloco-banner animated fadeIn">
	    <div class="container vPadding">
	      <div class="bloco__title-banner">
		      <div class="line line-1">
			        <div class="currentTitle">
		        		<h2 class="bloco-banner__title bloco-banner__title--facil animated fadeIn"><?php the_title() ?></h2>
		        	</div>
	        	</div>
	        	<div class="line line-2">
	        		<?php get_template_part('template-parts/breadcrumb'); ?>
	        	</div>
	      </div>
	    </div>  
  	</div>

		<header class="bloco-header vPadding hPadding_2 container-single">
			<h4 class="bloco-header__toptitle">ÚLTIMAS</h4>
			<h2 class="bloco-header__title">POSTAGENS</h2>
			<!-- <p class="bloco-header__subtitle"><?php // echo $resumoPage; ?></p> -->
		</header>	

		<main class="mainContent container-single">


		<?php //get_template_part('template-parts/servicos', 'list'); ?>


		    <ul class="nRow grid items border colls colls-1 vPadding bottomPadding">
      <?php
        $post_type_custom = 'post';

          if( is_tax() ) {

            $tax_slug =  'categoria';
            $args = array( 'post_type' => $post_type_custom, 'posts_per_page' => 20, 'oder_by' => 'date', 'order' => 'DESC', 'tax_query' => 
            array(  array( 'taxonomy'  => $tax_slug, 'field' => 'slug','terms' => get_queried_object()->slug,),), );
          
          }elseif( is_home() || is_front_page() ) {

            $args = array( 'post_type' => $post_type_custom, 'posts_per_page' => 20, 'oder_by' => 'date', 'order' => 'DESC' );
          
          }elseif( is_single() ) {

            $args = array( 'post_type' => $post_type_custom, 'posts_per_page' => 20, 'oder_by' => 'date', 'order' => 'DESC', 'post__not_in' => array( $post->ID ) );

          } elseif( is_search() ) {

            $args = array( 'post_type' => $post_type_custom, 's' => $_GET['s'], 'oder_by' => 'date', 'posts_per_page' => 20, 'order' => 'DESC' );
          
          } else {

            $args = array( 'post_type' => $post_type_custom, 'posts_per_page' => 20, 'oder_by' => 'date', 'order' => 'DESC' );
          
          }     

        $loop = new WP_Query( $args );

          while ( $loop->have_posts() ) : $loop->the_post();
            $slug = basename(get_permalink());
            $classItem = $slug;


      ?> 
   
      <li class="coll item intraMargin-bottom animate">
        
        <table cellspacing="0" cellpadding="0" width="100%" border="0">
			<thead>
				<tr>
					<td class="date intraPadding_3"><?php the_date('d/m'); ?></td>
					<td class="titlePost intraPadding_3">
						<h5 class="title"><a href="<?php echo get_permalink(); ?>"><?php echo the_title(); ?></a></h5>
					</td>
					<td class="comments intraPadding_3"><span><?php comments_number( '0', '1', '%' ); ?></span></td>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td colspan="3" class="intraPadding_2"><?php echo get_the_content(); ?></td>
				</tr>
			</tbody>
        </table>
      </li>          
          <?php endwhile; ?>     
    </ul>

		
			
		</main>

		<div class="sidebar">
			<div class="search intraPadding_2">
				<header>
					<h4 class="title">PESQUISAR</h4>
				</header>
				<main>

					<form role="search" method="get" id="form_pesquisa" class="form_pesquisa_mobile" action="<?php echo esc_url( home_url( '/' ) ); ?>">
						<input type="hidden" name="post_type" value="post">
						<label class="labelForm" for="s">O QUE VOCÊ ESTÁ BUSCANDO?</label>
						<input class="keyword" type="search" name="s" placeholder="DIGITE A SUA PESQUISA">
						<input class="submit" type="submit" value="" />
					</form>

				</main>
			</div>

			<div class="category intraPadding_2">
				<header>
					<h4 class="title">CATEGORIAS</h4>
				</header>
				<main>
				<ul>
				<?php 

					$categories = get_categories( array(
					    'orderby' => 'name',
					    'parent'  => 0
					) );
					 
					foreach ( $categories as $category ) {
					    printf( '<li><a href="%1$s">%2$s</a></li>',
					        esc_url( get_category_link( $category->term_id ) ),
					        esc_html( $category->name )
					    );
					}

				 ?>
					
					</ul>
				</main>
			</div>

			<div class="archive intraPadding_2">
				<header>
					<h4 class="title">ARQUIVOS</h4>
				</header>
				<main>

					<ul>
						<?php wp_get_archives( array( 'type' => 'monthly', 'limit' => 12 ) ); ?>
					</ul>

				</main>
			</div>

			<div class="comments intraPadding_2">
				<header>
					<h4 class="title">COMENTÁRIOS</h4>
				</header>
				<main>
					<ul>
						<?php
$args = array(
	//'status' => 'hold',
	'number' => '5',
	//'post_id' => 1, // use post_id, not post_ID
);
$comments = get_comments($args);
foreach($comments as $comment) :
	echo($comment->comment_author . '<br />' . $comment->comment_content);
endforeach;
?>
					</ul>
				</main>
			</div>
		</div>



</article>
<?php get_template_part('template-parts/newsletter'); ?> 
<?php get_footer(); ?>