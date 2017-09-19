<?php /*Template Name: veiculo single*/ ?>
<?php get_header(); ?>


<?php 

wp_reset_query();

$slug = basename(get_permalink());
$classItem = $slug;

	
if ( has_post_thumbnail() ) {
			
		//Imagem Destacada	
			$image_id = get_post_thumbnail_id();
			$sizeThumbs = 'full';
			$urlThumbnail = wp_get_attachment_image_src($image_id, $sizeThumbs);
			$urlThumbnail = $urlThumbnail[0];

} else {
			$urlThumbnail	= '';
}
		
//Campos Personalizados
$preco = get_post_custom_values('wpcf-preco');
$preco = $preco[0];
//$preco = number_format($preco, 2, ',', '.');

//Porporção
$proporcao = get_post_custom_values('wpcf-proporcao');
$proporcao = $proporcao[0];

//Parcelas
$parcelas = get_post_custom_values('wpcf-parcelas');
$parcelas = $parcelas[0];

//Valor de Parcela
$valorDaParcela = get_post_custom_values('wpcf-valor-da-parcela');
$valorDaParcela = $valorDaParcela[0];
//$valorDaParcela = number_format($valorDaParcela, 2, ',', '.');

 ?>

<article class="page-single-veiculos leftMain">
	<div class="bloco-banner animated fadeIn">
	    <div class="container vPadding">
	      <div class="bloco__title-banner">
	        
	       
	        <div class="line line-1">
		        <div class="currentTitle side">
		        	<h4 class="bloco-banner__titletopo">Veículos</h4>
		        <h2 class="bloco-banner__title bloco-banner__title--veiculo animated fadeIn"><?php echo get_the_title() ?></h2>
		        </div>

		        
			        <div class="bloco-banner__veiculo animated fadeIn">
		  				<img src="<?php echo $urlThumbnail; ?>" alt="<?php echo get_the_title() ?>">		
		  			</div>

			        <div class="bloco-banner__texto--veiculo animated fadeIn">
			          <p>CARTA DE CRÉDITO EQUIVALENTE A <?php echo $proporcao . '%'; ?> DO VALOR DO VEÍCULO.</p>
			        </div>
			    

		        <div class="price animated fadeIn">
	  				<p><strong>R$ <?php echo $preco; ?></strong></p>
	  				<p><?php echo $parcelas; ?> X <strong>R$ <?php echo $valorDaParcela; ?></strong></p>
	  			</div>	
  			</div>

	        <div class="line line-2">
	        	<?php get_template_part('template-parts/breadcrumb'); ?>
			</div>
	      </div>
	    </div>  
  	</div>

	

  	<div class="bloco__simulacao bloco__simulacao--single animated fadeInUp animate">
			<div class="bloco-header bloco-header--simulacao bloco-header--simulacao-single">
				<h2 class="bloco-header__title bloco-header__title--simulacao bloco-header__title--single">SOLICITE UMA SIMULAÇÃO JÁ!</h2>
			</div>
			<div>
				<?php echo do_shortcode('[contact-form-7 id="363" title="Pedido de simulação - INTERNA - VEÍCULO"] ');?>
			</div>
		</div>

  	<div class="container-single">
  		<!-- <div class="bloco__filter">
		  	<div class="container">
				<div class="col-md-2 col-xs-mobile mobile-separador-border">
					<div class="filtro filtro__ativo">
						<a href="#" class="filtro__link">
							<span class="filtro__valor">100%</span>
							<span class="filtro__title filtro__title--single">Do valor do cargo</span>
						</a>
					</div>
				</div>
				<div class="col-md-1 mobile-separador-none">
					<div class="bloco-opcoes__divisor"></div>
				</div>
				<div class="col-md-2 col-xs-mobile mobile-separador-border">
					<div class="filtro">
						<a href="#" class="filtro__link">
							<span class="filtro__valor">100%</span>
							<span class="filtro__title filtro__title--single">Do valor do cargo</span>
						</a>
					</div>
				</div>
				<div class="col-md-1 mobile-separador-none">
					<div class="bloco-opcoes__divisor"></div>
				</div>
				<div class="col-md-2 col-xs-mobile mobile-separador-border">
					<div class="filtro">
						<a href="#" class="filtro__link">
							<span class="filtro__valor">100%</span>
							<span class="filtro__title filtro__title--single">Do valor do cargo</span>
						</a>
					</div>
				</div>
				<div class="col-md-1 mobile-separador-none">
					<div class="bloco-opcoes__divisor"></div>
				</div>
				<div class="col-md-2 col-xs-mobile mobile-separador-border">
					<div class="filtro">
						<a href="#" class="filtro__link">
							<span class="filtro__valor">100%</span>
							<span class="filtro__title filtro__title--single">Do valor do cargo</span>
						</a>
					</div>
				</div>
			</div>
		</div> -->
		<!-- bloco__filter -->
		<div class="container vPadding topPadding_2 bottomPadding">
			<div class="bloco__post">
				<?php echo the_content(); ?>
			</div>
		</div>
	</div>
  	


</article>
<?php get_template_part('template-parts/newsletter'); ?> 
<?php get_footer(); ?>