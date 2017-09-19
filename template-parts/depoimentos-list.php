
<section class="nossos-carros effect" id="depoimentos">
  <div class="containe-owl">
<?php if ( is_home() || is_front_page() ) {

      $id_container = 'owl-opinioes';
      $class_container = '';

      echo '<div class="row">
        <div class="title-carousel">
          <h2 class="title"><span>Opniões dos</span>Nossos Clientes</h2>
          <h6><a href="' . esc_url( home_url() ) . '/depoimentos/" title="Ver Todos">Ver todos</a></h6>
        </div>
    </div>';

      } else { 

        $id_container = 'depoimentos-list';
        $class_container = 'grid-carousel';
      }
?>


    <div id="<?php echo $id_container; ?>" class="owl-carousel owl-theme <?php echo $class_container; ?> depoimentos-list">
      <?php
        $args = array( 'post_type' => 'depoimento', 'posts_per_page' => 20, 'order_by' => 'date', 'order' => 'DESC' );
        $loop = new WP_Query( $args );
          while ( $loop->have_posts() ) : $loop->the_post();
          $slug = basename(get_permalink());
          $classItem = $slug;
            //Campos Personalizados
            $atividade = get_post_custom_values('wpcf-atividade-social');
            $atividade = $atividade[0];
            $carro = get_post_custom_values('wpcf-carro-comprado');
            $carro = $carro[0];
            $prazo = get_post_custom_values('wpcf-prazo-de-contemplacao');
            $prazo = $prazo[0];

            $count = $loop->post_count;
            if( $count == 1 ) {
              $classColls = 'colls-1';
            } elseif( $count == 2 ) {
              $classColls = 'colls-2';
            } elseif( $count == 3 ) {
              $classColls = 'colls-3';          
            } elseif( $count >= 4 ) {
              $classColls = 'colls-4';
            }
      ?> 

      
      <?php if ( is_page( 'depoimentos' ) || is_archive('depoimento') ) {  echo '<div class="owl-item ' . $classColls . '">'; } ?>

      <div class="item">
        <i class="icon-aspas"></i>
       <p><?php echo get_the_content(); ?></p>
        <h6><?php echo get_the_title(); ?><span><?php echo $atividade; ?></span></h6>
        <div class="info">
          <figure>
            <span class="borderImg"><?php imagem_destacada('thumbnail', 'wow zoomIn', get_the_title(), ''); ?></span>
            <figcaption>
              <h6><?php echo $carro; ?></h6>
              <i class="stars"></i><span>Contemplado no <?php echo $prazo; ?>° mês</span>
            </figcaption>
          </figure>
        </div>
      </div>
       <?php if ( is_page( 'depoimentos' ) || is_archive('depoimento') ) {  echo '</div>'; } ?>
      <?php endwhile; ?>  
    </div>
  </div>
</section>