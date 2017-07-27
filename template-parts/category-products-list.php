  <div class="col-md-2">
      <div class="filtro filtro<?php if( !is_tax() ) { echo '__ativo'; } ?>">
        <a href="<?php echo get_home_url(); ?>/veiculos">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-all.png" alt="">
          <span class="filtro__title ">Todos</span>
        </a>
      </div>
  </div>

    <?php 
    
      //Organizando o filtro para listagem das categorias
      $args = array( 'hide_empty' => '0', 'order' => 'ASC' );
      $terms = get_terms( 'categoria-do-veiculo', $args );


      //Listando as categorias
      if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) {

      foreach ( $terms as $term ) {

      $termLink = esc_url( get_term_link( $term ) );

    ?>
    <div class="col-md-1">
      <div class="bloco-opcoes__divisor"></div>
    </div>
    <div class="col-md-2">
      <div class="filtro <?php echo $term->slug; ?><?php is_current_content('tax', $term->slug); ?>">
        <a href="<?php echo $termLink; ?>">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-all.png" alt="">
          <span class="filtro__title "><?php echo $term->name; ?></span>
        </a>
      </div>
    </div>
    
    <?php } } ?>