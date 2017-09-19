<?php /*Template Name: FAQ - Duvidas Frequentes */ ?>
<?php get_header(); ?>

<?php 
	global $page;
	$slug_page=$page->post_name;

	//Busca dados no campo personalizado da Página
	$resumoPage = get_post_custom_values('wpcf-editor-html-texto');
	$resumoPage = $resumoPage[0];
?>


<article class="page-atendimento faq internas">
	

	<div class="bloco-banner animated fadeIn">
	    <div class="container vPadding">
	      <div class="bloco__title-banner">
		      <div class="line line-1">
			        <div class="currentTitle">
		        		<h2 class="bloco-banner__title bloco-banner__title--facil animated fadeIn"><?php the_title() ?></h2>
		        	</div>
	        	</div>
	        	<div class="line line-2">
	        		<?php get_template_part('template-parts/breadcrumb'); ?>
	        	</div>
	      </div>
	    </div>  
  	</div>


  	<div class="bloco__filter v2">
  <div class="container colls colls-2 separator">
   
      <div class="filtro coll contato">
        <a href="<?php echo get_home_url(); ?>/atendimento">
          <span class="filtro__title ">CONTATOS</span>
        </a>
      </div>
	
      <div class="filtro coll duvida filtro__ativo">
        <a href="<?php echo get_home_url(); ?>/faq">
          <span class="filtro__title ">DÚVIDAS FREQUENTES (FAQ)</span>
        </a>
      </div>
   
   
   </div>
</div>


	


		<header class="bloco-header">
			<h4 class="bloco-header__toptitle">( FAQ )</h4>
			<h2 class="bloco-header__title">DÚVIDAS FREQUENTES</h2>
			<p class="bloco-header__subtitle"><?php echo $resumoPage; ?></p>
		</header>

		

		<main class="mainContent">

		<div class="nRow colls colls-full">
				<div class="coll barra blue hPadding vPadding">
					<form class="form formStyle intraColls searchFaq intraPadding_3" action="<?php echo home_url(); ?>">
					<fieldset>
						<p class="coll coll-main">
							<label>O QUE VOCÊ ESTÁ PROCURANDO?</label>
							<input type="search"  name="s" placeholder="CONTEMPLAÇÃO, REGRAS, ..." />
						</p>
						<p class="coll coll-side call2action">
							<input type="submit" class="buttonSend animate" value="BUSCAR" />
							<input type="hidden" name="post_type" value="duvida-frequente">
						</p>
					</form>	
				</div>
		</div>

		<?php  get_template_part('template-parts/pergunta-frequente', 'list'); ?>

		<!-- <ul class="nRow grid items border colls colls-2 vPadding hPadding faqList shadowHover">
			
			<li class="coll item intraMargin-bottom animate">
				<a class="intraPadding_2 animate" href="#">
					<h5 class="title">EXEMPLO DE UMA DÚVIDA FREQUENTE, ESRITO EM ATÉ DUAS LINHAS E LISTADO EM DUAS COLUNAS</h5>
				</a>
			</li>

			<li class="coll item intraMargin-bottom animate">
				<a class="intraPadding_2 animate" href="#">
					<h5 class="title">EXEMPLO DE UMA DÚVIDA FREQUENTE, ESRITO EM ATÉ DUAS LINHAS E LISTADO EM DUAS COLUNAS</h5>
				</a>
			</li>

			<li class="coll item intraMargin-bottom animate">
				<a class="intraPadding_2 animate" href="#">
					<h5 class="title">EXEMPLO DE UMA DÚVIDA FREQUENTE, ESRITO EM ATÉ DUAS LINHAS E LISTADO EM DUAS COLUNAS</h5>
				</a>
			</li>

			<li class="coll item intraMargin-bottom animate">
				<a class="intraPadding_2 animate" href="#">
					<h5 class="title">EXEMPLO DE UMA DÚVIDA FREQUENTE, ESRITO EM ATÉ DUAS LINHAS E LISTADO EM DUAS COLUNAS</h5>
				</a>
			</li>

			
		</ul> -->
		<div class="nRow colls colls-full">
				<div class="coll barra greyscale hPadding vPadding">
				<p class="horario">Você conseguiu <strong>encontrar</strong> o que <strong>procurava?</strong>. Você pode nos enviar as suas dúvidas para <strong>contato@globoconsorcio.com.br</strong>.
				</div>
		</div>
			
		</main>



</article>
<?php get_template_part('template-parts/newsletter'); ?> 
<?php get_footer(); ?>