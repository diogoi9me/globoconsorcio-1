<?php 
   
      
      $slug_post_type = get_post_type();

      switch ($slug_post_type) {
        case 'post': 
            $title_post_type = "<span class='post_type'>BLOG</span>";
          break;
        
       case 'page': 
            $title_post_type = "<span class='post_type'>PÁGINAS</span>";
          break;

        case 'veiculo': 
            $title_post_type = "<span class='post_type'>VEÍCULOS</span>";
          break;

        case 'plano': 
            $title_post_type = "<span class='post_type'>PLANOS</span>";
          break;
        
        case 'duvida-frequente': 
            $title_post_type = "<span class='post_type'>DÚVIDAS FREQUENTES</span>";
          break;

      }
    
 ?>
<li class="coll item intraMargin-bottom animate iconYes <?php echo get_post_type(); ?>">
        <a class="intraPadding_2 animate" href="<?php echo get_permalink(); ?>">
          <h5 class="title value"><span class="post_type"><?php echo $title_post_type; ?></span><?php echo the_title(); ?></h5>
        </a>
</li>  