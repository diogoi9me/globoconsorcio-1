<?php /*Template Name: Página de Atendimento */ ?>
<?php get_header(); ?>

<?php 
	global $page;
	$slug_page=$page->post_name;

	//Busca dados no campo personalizado da Página
	$resumoPage = get_post_custom_values('wpcf-editor-html-texto');
	$resumoPage = $resumoPage[0];
?>


<article class="page-atendimento internas">
	

	<div class="bloco-banner animated fadeIn">
	    <div class="container vPadding">
	      <div class="bloco__title-banner">
		      <div class="line line-1">
			        <div class="currentTitle">
		        		<h2 class="bloco-banner__title bloco-banner__title--facil animated fadeIn"><?php the_title() ?></h2>
		        	</div>
		        	<!-- <div class="bloco-banner__texto description animated fadeIn">
		         		<?php echo $resumoPage; ?>
		        	</div> -->
	        	</div>
	        	<div class="line line-2">
	        		<?php get_template_part('template-parts/breadcrumb'); ?>
	        	</div>
	      </div>
	    </div>  
  	</div>


  	<div class="bloco__filter v2">
  <div class="container colls colls-2 separator">
   
      <div class="filtro coll contato filtro__ativo">
        <a href="<?php echo get_home_url(); ?>/atendimento/">
          <span class="filtro__title ">CONTATOS</span>
        </a>
      </div>
	
      <div class="filtro coll duvida">
        <a href="<?php echo get_home_url(); ?>/faq">
          <span class="filtro__title ">DÚVIDAS FREQUENTES (FAQ)</span>
        </a>
      </div>
   
   
   </div>
</div>


		<header class="bloco-header">
			<h4 class="bloco-header__toptitle">Nossos</h4>
			<h2 class="bloco-header__title">Contatos</h2>
			<p class="bloco-header__subtitle"><?php echo $resumoPage; ?></p>
		</header>
		

		<main class="mainContent">

		<div class="nRow colls colls-full">
				<div class="coll barra blue hPadding vPadding">
					
					<ul class="items contacts phones">
						<li class="item contact phone"><span class="value">(85) 3231-9689</span></li>
						<li class="item contact wpp"><span class="value">(85) 99124-6989</span></li>
					</ul>

				</div>
		</div>
		<div class="nRow blocks colls colls-2">
			
			<div class="coll block formMail hPadding vPadding">

			<?php echo do_shortcode( '[contact-form-7 id="414" title="Fale Conosco" html_class="form formStyle intraColls"]' ); ?>
				
				<!-- <form class="form formStyle intraColls">
					<fieldset>
						<legend><span>FALE CONOSCO</span></legend>
						
						<p class="line coll coll-full">
							<label>SEU NOME</label>
							<input type="text"  name="teste" />
						</p>
						
						<p class="line coll coll-full">
							<label>SEU TELEFONE (UF)</label>
							<input type="tel"  name="teste" />
						</p>
						
						<p class="line coll coll-full">
							<label>SEU E-MAIL</label>
							<input type="email"  name="teste" />
						</p>
						<p class="line coll coll-main">
							<label>MENSAGEM</label>
							<textarea></textarea>
						</p>
						<p class="line coll coll-side">
							<input type="submit" class="buttonSend"  name="teste" value="ENVIAR" />
						</p>

					</fieldset>
				</form>
 -->
			</div>

			<div class="coll block map">

				<div class="iFrameResponsive">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3981.342841662831!2d-38.53795968570029!3d-3.73525364425221!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7c74907bbad87cd%3A0x975475ce44b7b53!2sCons%C3%B3rcio+Chevrolet+-+Globo+Cons%C3%B3rcio!5e0!3m2!1spt-BR!2sbr!4v1504060201695" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>

			</div>
			
		</div>
		<div class="nRow colls colls-full">
				<div class="coll barra greyscale hPadding vPadding">
				<p class="horario">Atendimento de <strong>Segunda</strong> a <strong>Sexta</strong>, das <strong>8h</strong> as <strong>18h</strong>.
<strong>Sábados</strong>, das <strong>8h</strong> as <strong>12h</strong>.</p>
				</div>
		</div>
			
		</main>



</article>
<?php get_template_part('template-parts/newsletter'); ?> 
<?php get_footer(); ?>