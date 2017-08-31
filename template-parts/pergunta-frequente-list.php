    <ul class="nRow grid items border colls colls-2 vPadding hPadding faqList shadowHover">
      <?php
        $post_type_custom = 'duvida-frequente';
          if( is_tax() ) {
            $tax_slug =  'categoria';
            $args = array( 'post_type' => $post_type_custom, 'posts_per_page' => 15, 'order' => 'ASC', 'tax_query' => 
            array(  array( 'taxonomy'  => $tax_slug, 'field' => 'slug','terms' => get_queried_object()->slug,),), );
          }elseif( is_home() || is_front_page() ) {
            $args = array( 'post_type' => $post_type_custom, 'posts_per_page' => 8, 'order' => 'ASC' );
          }elseif( is_single() ) {
            $args = array( 'post_type' => $post_type_custom, 'posts_per_page' => 8, 'order' => 'ASC', 'post__not_in' => array( $post->ID ) );
          }else{
            $args = array( 'post_type' => $post_type_custom, 'posts_per_page' => 8, 'order' => 'ASC' );
          }     
        $loop = new WP_Query( $args );

          while ( $loop->have_posts() ) : $loop->the_post();
            $slug = basename(get_permalink());
            $classItem = $slug;


      ?> 
   
      <li class="coll item intraMargin-bottom animate">
        <a class="intraPadding_2 animate" href="<?php echo get_permalink(); ?>">
          <h5 class="title"><?php echo the_title(); ?></h5>
        </a>
      </li>          
          <?php endwhile; ?>     
    </ul>
 

