<?php 
  
    if( isset( $_GET['s'] ) ) {

      $uriLevel_1 = $_GET['s'];

    } else {

      $uriLevel_1 = '';
    
    }

 ?>
<div class="bloco__filter">
  <div class="container">


  <div class="bloco__filter v2">
  <div class="container colls colls-6 separator">
   
      <div class="filtro coll todos-search <?php current_filter_search('todos'); ?>">
        <a href="<?php echo get_home_url(); ?>/<?php echo '?s=' . $uriLevel_1; ?>">
          <span class="filtro__title ">TODOS</span>
        </a>
      </div>
  
      <div class="filtro coll veiculo <?php current_filter_search('veiculo'); ?>">
        <a href="<?php echo get_home_url(); ?>/<?php echo '?s=' . $uriLevel_1; ?>&post_type=veiculo">
          <span class="filtro__title ">VEÍCULOS</span>
        </a>
      </div>

       <div class="filtro coll plano <?php current_filter_search('plano'); ?>">
        <a href="<?php echo get_home_url(); ?>/<?php echo '?s=' . $uriLevel_1; ?>&post_type=plano">
          <span class="filtro__title ">PLANOS</span>
        </a>
      </div>

       <div class="filtro coll duvida-frequente <?php current_filter_search('duvida-frequente'); ?>">
        <a href="<?php echo get_home_url(); ?>/<?php echo '?s=' . $uriLevel_1; ?>&post_type=duvida-frequente">
          <span class="filtro__title ">FAQ</span>
        </a>
      </div>

       <div class="filtro coll post <?php current_filter_search('post'); ?>">
        <a href="<?php echo get_home_url(); ?>/<?php echo '?s=' . $uriLevel_1; ?>&post_type=post">
          <span class="filtro__title ">BLOG</span>
        </a>
      </div>

       <div class="filtro coll page <?php current_filter_search('page'); ?>">
        <a href="<?php echo get_home_url(); ?>/<?php echo '?s=' . $uriLevel_1; ?>&post_type=page">
          <span class="filtro__title ">PÁGINAS</span>
        </a>
      </div>
   
   
   </div>
</div>



  </div>
</div>