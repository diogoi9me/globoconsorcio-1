<!--nossos planos-->
<section class="nossos-planos" id="planos">
  <div class="container vPadding"> 
    <h2 class="title"><span>Nossos</span>Planos</h2>
    <h6><a href="<?php echo esc_url( home_url() ); ?>/planos" title="Ver todos">Ver todos</a></h6>
    <?php  get_template_part('template-parts/planos', 'list'); ?>
  </div>
</section>