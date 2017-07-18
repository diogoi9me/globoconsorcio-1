<?php /*Template Name: HOME */ ?>
<?php get_header(); ?>

<!--banner-->

<section class="area_video_banner effect" id="home">

  

<!-- vídeo -->

<?php slide_home('1'); ?>

</section>



<!--solicitar uma simulação-->

<section class="simulacao effect" id="simulacao">

	<div class="container">

		<div class="row">

			<h2 class="title"><span>Solicitar uma</span>Simulação</h2>

        <?php echo do_shortcode( '[contact-form-7 id="19" title="Pedido de Simulação" html_class="form_simulacao"]' ); ?>

		</div>

	</div>

</section>



<!--blue layer-->

<div class="line_blue effect">

	<div class="box_left">

		<a class="chamada" href="#"><i class="icon-volume-control-phone"></i><h5>Nós Ligamos para você</h5></a>

	</div>

  <div class="box_center">

      <span>//</span>

  </div>

	<div class="box_right">

		<a class="chamada" href="#"><i class="icon-handshake-o"></i><h5>Nós Vamos até você</h5></a>

	</div>

</div>



<!--nossos carros-->

<section class="nossos-carros effect" id="carros">

  <div class="containe-owl">

    <div class="row">

        <div class="title-carousel">

          <h2 class="title"><span>Nossos</span>Veículos</h2>

           <h6><a href="<?php echo esc_url( home_url() ); ?>/veiculos" title="Ver todos">Ver todos</a></h6>

        </div>

    </div>

    <div id="owl-carros" class="owl-carousel owl-theme">



      <?php

        $args = array( 'post_type' => 'veiculo', 'posts_per_page' => 8, 'order' => 'ASC' );

        $loop = new WP_Query( $args );



          while ( $loop->have_posts() ) : $loop->the_post();

    

          $slug = basename(get_permalink());

          $classItem = $slug;

    

            //Campos Personalizados

            $preco = get_post_custom_values('wpcf-preco');

            $preco = $preco[0];

            //$preco = number_format($preco, 2, ',', '.');



            $parcelas = get_post_custom_values('wpcf-parcelas');

            $parcelas = $parcelas[0];



            $valorDaParcela = get_post_custom_values('wpcf-valor-da-parcela');

            $valorDaParcela = $valorDaParcela[0];

            //$valorDaParcela = number_format($valorDaParcela, 2, ',', '.');

      ?> 



      <div class="item">

        <h4><?php echo the_title(); ?></h4>

        <a class="image" href="<?php echo get_permalink(); ?>" title="<?php echo the_title_attribute( 'echo=0' ); ?>" rel="bookmark">

          <div class="info">

            <figure class="hvr-grow wow zoomIn">

              <?php 

                imagem_destacada('full', 'wow pulse', get_the_title(), '')

              ?>

              <figcaption>

                <span>R$ <?php echo $preco ?></span>

                <strong><?php echo $parcelas . 'X de <strong>R$ ' . $valorDaParcela . '</strong>' ?></strong>

              </figcaption>

            </figure>



            <?php trackButton('link', 'productView_'. get_the_ID(), 'Clicado', get_the_title(), get_post_permalink(), get_the_title(), 'productView_'. get_the_ID(), 'btn btn__carros wow zoomIn hvr-hollow', 'Simule aqui'); ?>

          </div>

        </a>

      </div>

      <?php endwhile; ?>   

    </div>

  </div>

</section>



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



<!--metricas-->

<section class="metricas effect" id="metricas">

  <div class="container-metricas">
    
    <?php 

      $args = array( 'post_type' => 'metrica', 'posts_per_page' => 3, 'orderby' => 'menu_order', 'order' => 'ASC' );

      $loop = new WP_Query( $args );



      while ( $loop->have_posts() ) : $loop->the_post();

          

        $slug = basename(get_permalink());

        $classItem = $slug;

    ?>

    <div class="metricas__clientes">

      <div class="clientes-ativos wow zoomIn">
        <div class="info__metricas">
        <i class="icon-<?php echo $classItem ; ?>"></i><h6><?php campo_customizado('wpcf-rotulo'); ?></h6>

        <span><?php campo_customizado('wpcf-valor'); ?></span>
        </div>
      </div>

      <h4 class="title-clientes-ativos"><?php echo get_the_title(); ?></h4>

    </div>

    <?php endwhile; ?>

  </div>

</section>



<!--entenda o consórcio-->

<section class="consorcio effect" id="consorcio">

  <div class="containe-owl">

     <h2 class="title"><span>Entenda o</span>Consórcio</h2>

     <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt in magni veniam fugiat, at eum aliquam assumenda hic doloribus, perferendis quo velit eius, ipsum blanditiis ratione possimus qui!</p>

    <div id="owl-consorcio" class="owl-carousel owl-theme">

      <div class="item">

        <i class="icon-pass1"></i>

        <h4>Formação do grupo</h4>

        <div class="about">

          <figure class="wow zoomIn">

            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/passos1.png" alt="">

          </figure>

          <i class="icon-proximo"></i>

        </div>

      </div>

      <div class="item">

        <i class="icon-pass2"></i>

        <h4>Assembleia / Lance</h4>

        <div class="about">

          <figure class="wow zoomIn">

            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/passos2.png" alt="">

          </figure>

          <i class="icon-proximo"></i>

        </div>

      </div>

      <div class="item">

        <i class="icon-pass3"></i>

        <h4>Contemplação</h4>

        <div class="about">

          <figure class="wow zoomIn">

            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/passos3.png" alt="">

          </figure>

        </div>

      </div>

    </div>

  </div>

</section>

<!--vantagens do consórcio & sobre a globo consórcio -->

<section class="vantagens__top effect"> 

  <div class="col-md-6 col-sm-6 col-xs-12">

    <div class="row">

      <div class="vantagens__a">

        

        <div class="vantagens__conteudo">

          <h2 class="title"><span>Vantagens do</span> Consórcio Chevrolet</h2>

          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur debitis eaque iusto unde consequuntur repellat, sunt distinctio rem commodi incidunt rerum minima.</p>

          <button class="wow zoomIn"><i class="glyphicon glyphicon-plus"></i>Saiba mais</button>

        

        </div>

      </div>

    </div>

  </div>

      <div class="col-md-6 col-sm-6 col-xs-12">

        <div class="row">

          <div class="vantagens__b">

            <ul class="vantagens__blocos">

              <li class="wow slideInRight">

                <div>

                  <i class="icon-security"></i>

                  <h5>Investimento<br/> Seguro</h5>

                </div>

              </li>

              <li class="wow slideInRight">

                <div>

                  <i class="icon-calculadora"></i>

                  <h5>Planos em até<br/> 84 meses</h5>

                </div>

              </li>

              <li class="wow slideInRight">

                <div>

                  <i class="icon-porcento"></i>

                  <h5>Zero de juros e<br/> Zero de entrada</h5>

                </div>

              </li>

              <li class="wow slideInRight">

                <div>

                  <i class="icon-desconto"></i>

                  <h5>Descontos<br/> para pcd</h5>

                </div>

              </li>

            </ul>

          </div>

        </div>

      </div>

</section>

<section class="vantagens__bottom effect"> 

  <div class="col-md-6 col-sm-6 mobile-a">

    <div class="row">

      <div class="vantagens__a">

        <ul class="vantagens__blocos">

          <li class="wow slideInLeft">

            <div>

              <i class="icon-tempo"></i>

              <h5>Mais de 20 de<br/>Globo Consórcio</h5>

            </div>

          </li>

          <li class="wow slideInLeft">

            <div>

              <i class="icon-colaboradores"></i>

              <h5>Mais de 500<br/> Colaboradores</h5>

            </div>

          </li>

          <li class="wow slideInLeft">

            <div>

              <i class="icon-atendimento"></i>

              <h5>Atendimento em<br/> todo o Brasil</h5>

            </div>

          </li>

          <li class="wow slideInLeft">

            <div>

              <i class="icon-certificada"></i>

              <h5>Empresa Auditada<br/>e Certificada</h5>

            </div>

          </li>

        </ul>

      </div>

    </div>

  </div>

  <div class="col-md-6 col-sm-6 col-xs-12 mobile-b">

    <div class="row">

      <div class="vantagens__b">

        <div class="vantagens__conteudo">

          <h2 class="title"><span>Sobre a</span> Globo Consórcio</h2>

          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur debitis eaque iusto unde consequuntur repellat, sunt distinctio rem commodi incidunt rerum minima.</p>

          <button class="wow zoomIn"><i class="glyphicon glyphicon-plus"></i>Saiba mais</button>

        </div>

      </div>

    </div>

  </div>

</section>



<!--últimas do nosso blog-->

<section class="ultimasblog effect" id="blog">

  <div class="container"> 

    <h2 class="title"><span>Últimas do</span>Nosso Blog</h2>

    <div class="col-md-12">

      <div class="title__bloco">

        <input type="text" class="form-control" placeholder="Pesquise no Blog" >
        <input type="submit" class="icon-pesquisa">

        <h6><a href="#" title="Blog Completo">Blog Completo</a></h6>

      </div>

    </div>

    <ul class="ultimasblog__blocoplanos">

     <?php 

        $args = array( 'post_type' => 'post', 'posts_per_page' => 3, 'orderby' => 'menu_order', 'order' => 'ASC' );

        $loop = new WP_Query( $args );



        while ( $loop->have_posts() ) : $loop->the_post();

        

          $slug = basename(get_permalink());

          $classItem = $slug;

      ?>

      <li class="wow slideInUp">

        <div class="hvr-grow">

          <h5><?php echo get_the_title(); ?></h5>

          <br/><hr class="gray"><br/>

          <p><?php campo_customizado('wpcf-editor-html-texto'); ?></p>

           <?php trackButton('link', 'productView_'. get_the_ID(), 'Clicado', get_the_title(), get_post_permalink(), get_the_title(), 'productView_'. get_the_ID(), 'btn btn__nossoblog wow zoomIn hvr-hollow', 'Ler Mais'); ?>

        </div>

      </li>

       <?php endwhile; ?>

    </ul>

  </div>

</section>





<!--opiniões dos nossos clientes -->

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

        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/aspas.png" alt="">

       <p><?php echo get_the_content(); ?></p>

        <h6><?php echo get_the_title(); ?><span><?php echo $atividade; ?></span></h6>

        <div class="info">

          <figure>

            <?php 

                imagem_destacada('thumbnail', 'wow zoomIn', get_the_title(), '');

              ?>

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









<!--central de atendimento-->

<section class="atendimento effect" id="atendimento">

  <div class="container">

    <h2 class="title"><span>Central de</span>Atendimento</h2>

      <div class="informacoes">

        <h6>Atendimento de <strong>Seguda</strong> a <strong>Sexta</strong>, das <strong>8h</strong> as <strong>18h.</strong><br/><strong>Sábados</strong>, das <strong>8h</strong> as <strong>12h</strong>.</h6><br/>

          <i class="icon-phone"></i><span>(85) 3031-3511</span><br/>

          <i class="icon-whatsapp"></i><span>(85) 9999-9999</span>

      </div>

      <div class="form">

        <i class="icon-mail"></i><h4>Fale conosco</h4>

        <?php echo do_shortcode( '[contact-form-7 id="18" title="Fale Conosco"] ' ); ?>

      </div>

  </div>

</section>

<?php get_footer(); ?>