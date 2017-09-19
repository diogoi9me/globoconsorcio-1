<?php /*Template Name: planos */ ?>
<?php get_header(); ?>

<?php 
  global $page;
  $slug_page=$page->post_name;

  //Busca dados no campo personalizado da Página
  $resumoPage = get_post_custom_values('wpcf-editor-html-texto');
  $resumoPage = $resumoPage[0];
?>

<article class="page-planos">

  <div class="bloco-banner animated fadeIn">
      <div class="container vPadding">
        <div class="bloco__title-banner">
          <div class="line line-1">
              <div class="currentTitle">
                <h2 class="bloco-banner__title bloco-banner__title--facil animated fadeIn"><?php the_title() ?></h2>
              </div>
              <!-- <div class="bloco-banner__texto description animated fadeIn">
                <?php // echo $resumoPage; ?>
              </div> -->
            </div>
            <div class="line line-2">
              <?php get_template_part('template-parts/breadcrumb'); ?>
            </div>
        </div>
      </div>  
    </div>



  <!--nossos planos-->

  <section class="nossos-planos effect" id="planos">

    <div class="container bottomPadding">

   <?php

    if( is_page('planos') ) {

  ?>               

  <div class="bloco-header topPadding">
        <h4 class="bloco-header__toptitle">CONHEÇA OS</h4>
        <h2 class="bloco-header__title">NOSSOS PLANOS</h2>
        <p class="bloco-header__subtitle"><?php echo $resumoPage; ?></p>
  </div>

  <?php } else { ?>

  <h2 class="title vPadding"><span>Nossos</span>Planos</h2>

  <?php } ?>

      <?php  get_template_part('template-parts/planos', 'list'); ?>

    </div>

  </section>
</article>
<?php get_template_part('template-parts/newsletter'); ?> 
<?php get_footer(); ?>