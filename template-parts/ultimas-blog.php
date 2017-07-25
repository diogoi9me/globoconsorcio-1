<section class="ultimasblog effect" id="blog">
  <div class="container"> 
    <h2 class="title"><span>Últimas do</span>Nosso Blog</h2>
    <div class="col-md-12">
      <div class="title__bloco">
        <input type="text" class="form-control" placeholder="Pesquise no Blog" >
        <input type="submit" class="icon-pesquisa">
        <h6><a href="#" title="Blog Completo">Blog Completo</a></h6>
      </div>
    </div>
    <ul class="ultimasblog__blocoplanos">
     <?php 
        $args = array( 'post_type' => 'post', 'posts_per_page' => 3, 'orderby' => 'menu_order', 'order' => 'ASC' );
        $loop = new WP_Query( $args );
        while ( $loop->have_posts() ) : $loop->the_post();

          $slug = basename(get_permalink());
          $classItem = $slug;

      ?>
      <li class="wow slideInUp">
        <div class="hvr-grow">
          <h5><?php echo get_the_title(); ?></h5>
          <br/><hr class="gray"><br/>
          <p><?php campo_customizado('wpcf-editor-html-texto'); ?></p>
           <?php trackButton('link', 'productView_'. get_the_ID(), 'Clicado', get_the_title(), get_post_permalink(), get_the_title(), 'productView_'. get_the_ID(), 'btn btn__nossoblog wow zoomIn hvr-hollow', 'Ler Mais'); ?>
        </div>
      </li>
       <?php endwhile; ?>
    </ul>
  </div>
</section>