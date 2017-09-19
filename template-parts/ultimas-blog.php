<section class="ultimasblog effect" id="blog">
  <div class="container vPadding"> 
    <h2 class="title"><span>Últimas do</span>Nosso Blog</h2>
    <div class="col-md-12">
      <div class="title__bloco">

      <form role="search" method="get" id="form_pesquisa" action="<?php echo esc_url( home_url( '/' ) ); ?>">
            <input type="hidden" name="post_type" value="post">
            <input class="keyword form-control" type="search" name="s" placeholder="Pesquisar no Blog">
            <input class="submit icon-pesquisa" type="submit" value="" />
          </form>
        <h6><a href="<?php echo get_home_url(); ?>/blog/" target="_blank">Blog Completo</a></h6>
      </div>
    </div>
    


    <ul class="ultimasblog__blocoplanos nRow grid items border colls colls-3 hPaddings topPadding_2 shadowHover">
     <?php 
        $args = array( 'post_type' => 'post', 'posts_per_page' => 3, 'orderby' => 'date', 'order' => 'DESC' );
        $loop = new WP_Query( $args );
        while ( $loop->have_posts() ) : $loop->the_post();

          $slug = basename(get_permalink());
          $classItem = $slug;

      ?>
      <li class="coll item intraMargin-right animate wow slideInUp">
        <div >
          <h5><?php echo get_the_title(); ?></h5>
          <br/><hr class="gray"><br/>
          <p><?php echo get_the_excerpt(); ?></p>
           <?php trackButton('link', 'postBlog_'. get_the_ID(), 'Clicado', get_the_title(), get_post_permalink(), get_the_title(), 'postBlogView_'. get_the_ID(), 'btn btn__nossoblog wow zoomIn hvr-hollow', 'Ler Mais', 'blog'); ?>
        </div>
      </li>
       <?php endwhile; ?>
    </ul>
   
  </div>
</section>