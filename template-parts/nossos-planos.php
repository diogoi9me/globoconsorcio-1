<!--nossos planos-->
<section class="nossos-planos effect" id="planos">
  <div class="container"> 
    <h2 class="title"><span>Nossos</span>Planos</h2>
    <h6><a href="<?php echo esc_url( home_url() ); ?>/nossos-planos" title="Ver todos">Ver todos</a></h6>
    <ul class="bloco-planos">

      <?php 
        $args = array( 'post_type' => 'plano', 'posts_per_page' => 8, 'orderby' => 'menu_order', 'order' => 'ASC' );
        $loop = new WP_Query( $args );
        
        while ( $loop->have_posts() ) : $loop->the_post();
          $slug = basename(get_permalink());
          $classItem = $slug;
      ?>

      <li class="wow zoomIn">
        <div class="hvr-grow">
          <span class="info">
          <?php imagem_destacada('full', 'wow pulse', get_the_title(), '') ?>
          <h5><?php echo get_the_title(); ?></h5>
          <span><?php campo_customizado('wpcf-prazo'); ?></span>
          </span>
          <div class="resumo">
            <?php  if (has_excerpt() ) { the_excerpt(); } ?>  
          </div>
          <?php trackButton('link', 'productView_'. get_the_ID(), 'Clicado', get_the_title(), get_post_permalink(), get_the_title(), 'productView_'. get_the_ID(), 'btn btn__nossoplano wow zoomIn hvr-hollow', 'Simule aqui'); ?>
        </div>
      </li>
      <?php endwhile; ?>
    </ul>
  </div>
</section>