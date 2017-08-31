<?php get_header(); ?>

<article class="page-atendimento faq internas">
	

	<div class="bloco-banner animated fadeIn">
	    <div class="container">
	      <div class="bloco__title-banner">
		      <div class="line line-1">
			        <div class="currentTitle">
		        		<h2 class="bloco-banner__title bloco-banner__title--facil animated fadeIn">DÚVIDAS FREQUENTES</h2>
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
        <a href="<?php echo get_home_url(); ?>/veiculos">
          <span class="filtro__title ">CONTATOS</span>
        </a>
      </div>
	
      <div class="filtro coll duvida filtro__ativo">
        <a href="<?php echo get_home_url(); ?>/veiculos">
          <span class="filtro__title ">DÚVIDAS FREQUENTES (FAQ)</span>
        </a>
      </div>
   
   
   </div>
</div>


	


		<header class="bloco-header">
			<h4 class="bloco-header__toptitle">( FAQ )</h4>
			<h2 class="bloco-header__title">DÚVIDAS FREQUENTES</h2>
		</header>

		

		<main class="mainContent">

		<div class="nRow colls colls-full">
				<div class="coll barra blue hPadding vPadding">
					<form class="form formStyle intraColls searchFaq intraPadding_3">
					<fieldset>
						<p class="coll coll-main">
							<label>O QUE VOCÊ ESTÁ PROCURANDO?</label>
							<input type="text"  name="teste" placeholder="CONTEMPLAÇÃO, REGRAS, ..." />
						</p>
						<p class="coll coll-side call2action">
							<input type="submit" class="buttonSend animate"  name="teste" value="BUSCAR" />
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

<?php get_footer(); ?>