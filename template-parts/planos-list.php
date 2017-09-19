    <?php 
      if( is_page('planos') ) { 
          $classPage = 'bottomPadding'; 
        } else { 
          $classPage = 'hPaddings topPadding_2';
        }
     ?>
    <ul class="bloco-planos nRow grid items border colls colls-3 vPadding <?php echo $classPage; ?> shadowHover">
      <?php
        $post_type_custom = 'plano';
          if( is_tax() ) {
            $tax_slug =  'categoria';
            $args = array( 'post_type' => $post_type_custom, 'posts_per_page' => 15, 'order' => 'ASC', 'orderby' => 'meta_value_num', 'tax_query' => 
            array(  array( 'taxonomy'  => $tax_slug, 'field' => 'slug','terms' => get_queried_object()->slug,),), );
          }elseif( is_home() || is_front_page() ) {
            $args = array( 'post_type' => $post_type_custom, 'posts_per_page' => 8, 'orderby' => 'meta_value_num', 'order' => 'ASC' );
          }elseif( is_single() ) {
            $args = array( 'post_type' => $post_type_custom, 'posts_per_page' => 8, 'orderby' => 'meta_value_num', 'order' => 'ASC', 'post__not_in' => array( $post->ID ) );
          }else{
            $args = array( 'post_type' => $post_type_custom, 'posts_per_page' => 8, 'orderby' => 'meta_value_num', 'order' => 'ASC' );
          }     
        $loop = new WP_Query( $args );

          while ( $loop->have_posts() ) : $loop->the_post();
            $slug = basename(get_permalink());
            $classItem = $slug;


      ?> 
   
       <li class="coll item intraMargin-right animate wow slideInUp">
        <div class="intraPadding">
            <span class="info">
            <div class="img">
              <?php 

                  imagem_destacada('full', 'wow pulse', get_the_title(), '')

               ?>
            </div>

            <h5><span class="value"><?php echo get_the_title(); ?></span></h5>

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
 

