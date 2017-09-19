	<div class="layer_menu">
	<div class="container vPadding">
		<div class="row">
		  	<div class="col-md-4 col-sm-12">
		    	<div class="row">
		      		<div class="col-xs-6 col-sm-6">
		        		<ul class="servicos">
							<li><h4>Serviços</h4></li>
							<li><a href="<?php echo esc_url( home_url() ); ?>/servicos/">Acessar meu Consórcio</a></li>
							<li><a href="<?php echo esc_url( home_url() ); ?>/servicos/2-via-boletos/">2a via de boleto</a></li>
							<li><a href="<?php echo esc_url( home_url() ); ?>/servicos/datas-assembleias/">Datas de assembleias</a></li>
							<li><a href="<?php echo esc_url( home_url() ); ?>/servicos/valores-devolver">Valores a devolver</a></li>
							<li><a href="<?php echo esc_url( home_url() ); ?>/servicos/ofertas-lances/">Ofertas de Lances</a></li>
							<li><a href="<?php echo esc_url( home_url() ); ?>/faq/">Dúvidas Frequentes (FAQ)</a></li>
						</ul>
		      		</div>
		      		<div class="col-xs-6 col-sm-6">
		       			<ul class="institucional">
							<li><h4>Institucional</h4></li>
							<li><a href="<?php echo esc_url( home_url() ); ?>/sobre-a-globo-consorcio/">Sobre a globo consórcio</a></li>
							<li><a href="<?php echo esc_url( home_url() ); ?>/depoimentos/">Depoimentos de clientes</a></li>
							<li><a href="<?php echo esc_url( home_url() ); ?>/consorcio-chevrolet/">Consóricio Chevrolet</a></li>
							<li><a href="<?php echo esc_url( home_url() ); ?>/veiculos/">Nossos Veículos</a></li>
							<li><a href="<?php echo esc_url( home_url() ); ?>/planos/">Nossos Planos</a></li>
							<li><a href="<?php echo esc_url( home_url() ); ?>/consorcio-chevrolet/consorcio-chevrolet/">Descontos para PCD</a></li>
							<li><a href="<?php echo esc_url( home_url() ); ?>/atendimento/">Onde estamos</a></li>

						</ul>
		      		</div>
		       		<div class="col-xs-6 col-sm-6">
				 		<ul class="blog">
							<li><h4>Blog</h4></li>
							 <?php
                  $menu_name = 'navBlog';

                  if( wp_get_nav_menu_object($menu_name) != '' ) { 

                  $menu = wp_get_nav_menu_object($menu_name);
                  $menuitems = wp_get_nav_menu_items( $menu->term_id, array( 'order' => 'DESC' ) );
                ?>
                <?php
                  foreach( $menuitems as $item ):
                  // set up title and url
                  $title = $item->title;
                  $link = $item->url;
                  $class = $item->classes[0];
                ?>  
                <li class="<?php echo $class; ?>">
                  <a href="<?php echo $link; ?>" title="<?php echo $title; ?>">
                    <?php echo $title; ?>
                  </a>
                </li>                       
                <?php  endforeach; ?>

                <?php } ?>


							<!-- <li><a href="http://chevrolet.globoconsorcio.com.br/blog/dicas/">Dicas</a></li>
							<li><a href="http://chevrolet.globoconsorcio.com.br/blog/category/noticias/">Notícias</a></li>
							<li><a href="http://chevrolet.globoconsorcio.com.br/blog/category/pesquisas/">Pesquisas</a></li>
							<li><a href="http://chevrolet.globoconsorcio.com.br/blog/category/carros/">Carros</a></li> -->
						</ul>
		       		</div>
		       		<div class="col-xs-6 col-sm-6">
		       	 		<ul class="comprar">
							<li><h4>Compre Agora</h4></li>
							<li><a href="<?php echo esc_url( home_url() ); ?>/simulacao/">Simule seu Consórcio</a></li>
							<li><a href="javascript:call2action('ligar');">Solicite uma Ligação</a></li>
							<li><a href="javascript:call2action('visitar');">Solicite uma Visita</a></li>
				 		</ul>
		       		</div>
		    	</div>
			</div>
			<div class="col-md-4 col-sm-12 hidden-xs hidden-sm">
		    	<div class="row">
		      		<div class="col-xs-12 col-sm-12 facebook">

		      		<?php echo do_shortcode('[efb_likebox fanpage_url="https://www.facebook.com/globoconsorcio/" fb_appid="" box_width="390" box_height="390" responsive="1" show_faces="1" show_stream="0" hide_cover="0" small_header="1" hide_cta="1" locale="pt_BR"]'); ?>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-12">
		    	<div class="row">
		      		<div class="col-xs-12 col-sm-12">
						<div class="central">
							<h4>Central de Atendimento</h4>
<!-- 
							<iframe class="maps" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3981.341995798815!2d-38.53832938569846!3d-3.735440097282296!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7c74907c71bf483%3A0xb3a2212eb326add3!2sAv.+Domingos+Ol%C3%ADmpio%2C+1441+-+Benfica%2C+Fortaleza+-+CE%2C+60040-081!5e0!3m2!1spt-BR!2sbr!4v1491336137378" width="355" height="95" frameborder="0" style="border:0; max-width:100%;" allowfullscreen></iframe> -->

							<div class="col-xs-12 col-sm-12">
								<div class="row">
									<div class="end animated zoomIn">
										<i class="icon-location"></i>
										<p>Avenida Domingos Olimpio, 1441,<br/> Benfica - Fortaleza/CE - CEP:<br/> 60040-081</p>
									</div>
								</div>
							</div>
							<i class="animated zoomIn icon-phone"></i><span>(85) 3231-9689</span><br/>
							<i class="animated zoomIn icon-whatsapp"></i><span>(85) 99124-6989</span>
						</div>
		      		</div>
		    	</div>
			</div>
		</div>
	</div>
	</div>