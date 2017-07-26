<section class="metricas effect" id="metricas">
  <div class="container-metricas">
    <?php 
      $args = array( 'post_type' => 'metrica', 'posts_per_page' => 3, 'orderby' => 'menu_order', 'order' => 'ASC' );
      $loop = new WP_Query( $args );
        while ( $loop->have_posts() ) : $loop->the_post();
          $slug = basename(get_permalink());
          $classItem = $slug;
    ?>
    <div class="metricas__clientes">
      <div class="clientes-ativos wow zoomIn">
        <div class="info__metricas">
          <i class="icon-<?php echo $classItem ; ?>"></i><h6><?php campo_customizado('wpcf-rotulo'); ?></h6>
          <span><?php campo_customizado('wpcf-valor'); ?></span>
        </div>
      </div>
      <h4 class="title-clientes-ativos"><?php echo get_the_title(); ?></h4>
    </div>
    <?php endwhile; ?>
  </div>
</section>
