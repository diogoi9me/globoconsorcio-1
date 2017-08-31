<?php get_header(); ?>
<article class="page-planos">

  <div class="bloco-banner animated fadeIn">
      <div class="container">
        <div class="bloco__title-banner">
          <div class="line line-1">
              <div class="currentTitle side">
                <h2 class="bloco-banner__title bloco-banner__title--facil animated fadeIn">NOSSOS PLANOS</h2>
              </div>
              <div class="bloco-banner__texto description animated fadeIn">
               Lorem ipsum dolor sit amet, consectetur adipisicing elit, consectetur adipisicing ipsum dolor sit amet. 
              </div>
            </div>
            <div class="line line-2">
              <?php get_template_part('template-parts/breadcrumb'); ?>
            </div>
        </div>
      </div>  
    </div>



  <!--nossos planos-->

  <section class="nossos-planos effect" id="planos">

    <div class="container"> 

      <h2 class="title"><span>Nossos</span>Planos</h2>



      <?php  get_template_part('template-parts/planos', 'list'); ?>

    </div>

  </section>
</article>

<?php get_footer(); ?>