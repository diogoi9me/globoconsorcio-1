<section class="nossos-carros effect" id="depoimentos">
  <div class="containe-owl">
    <div class="row">
        <div class="title-carousel">
          <h2 class="title"><span>Opniões dos</span>Nossos Clientes</h2>
          <h6><a href="#" title="Ver Todos">Ver todos</a></h6>
        </div>
    </div>
    <div id="owl-opinioes" class="owl-carousel owl-theme">
      <?php
        $args = array( 'post_type' => 'depoimento', 'posts_per_page' => 8, 'order' => 'ASC' );
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
      ?> 
      <div class="item">
        <i class="icon-aspas"></i>
       <p><?php echo get_the_content(); ?></p>
        <h6><?php echo get_the_title(); ?><span><?php echo $atividade; ?></span></h6>
        <div class="info">
          <figure>
            <?php imagem_destacada('thumbnail', 'wow zoomIn', get_the_title(), ''); ?>
            <figcaption>
              <h6><?php echo $carro; ?></h6>
              <i class="stars"></i><span>Contemplado no <?php echo $prazo; ?>° mês</span>
            </figcaption>
          </figure>
        </div>
      </div>
      <?php endwhile; ?>  
    </div>
  </div>
</section>