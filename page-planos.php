<?php /*Template Name: planos */ ?>
<?php get_header(); ?>

<article class="page-planos">

  <div class="bloco-banner animated fadeIn">
    <div class="container">
      <div class="bloco__title-banner">
        <h4 class="bloco-banner__titletopo">Nossos Planos</h4>
        <h2 class="bloco-banner__title bloco-banner__title--facil animated fadeIn"><?php the_title() ?></h2>
        <div class="bloco-banner__texto animated fadeIn">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
        </div>
        <?php get_template_part('template-parts/breadcrumb'); ?>
      </div>
    </div>  
  </div>



  <!--nossos planos-->

  <section class="nossos-planos effect" id="planos">

    <div class="container"> 

      <h2 class="title"><span>Nossos</span>Planos</h2>



      <ul class="bloco-planos">

        <?php 

          $args = array( 'post_type' => 'plano', 'posts_per_page' => 8, 'orderby' => 'menu_order', 'order' => 'ASC' );

          $loop = new WP_Query( $args );



          while ( $loop->have_posts() ) : $loop->the_post();

            

            $slug = basename(get_permalink());

            $classItem = $slug;



        ?>

        <li class="wow slideInUp">

          <div class="hvr-grow">
            <span class="info">
            <?php 

                imagem_destacada('full', 'wow pulse', get_the_title(), '')

             ?>

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
</article>

<?php get_footer(); ?>