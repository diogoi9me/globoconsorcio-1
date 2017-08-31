<?php /*Template Name: SERVIÇOS */ ?>
<?php get_header(); ?>

<?php 
	global $page;
	$slug_page=$page->post_name;

	//Busca dados no campo personalizado da Página
	$resumoPage = get_post_custom_values('wpcf-editor-html-texto');
	$resumoPage = $resumoPage[0];
?>


<article class="page-servicos internas">
	

	<div class="bloco-banner animated fadeIn">
	    <div class="container">
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

		<header class="bloco-header vPadding">
			<h4 class="bloco-header__toptitle">CENTRAL DE</h4>
			<h2 class="bloco-header__title">SERVIÇOS</h2>
			<p class="bloco-header__subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt in magni veniam fugiat, at eum aliquam assumenda hic doloribus, perferendis quo velit eius, ipsum blanditiis ratione possimus qui!</p>
		</header>	

		<main class="mainContent">

		<div class="nRow colls colls-full">
				<div class="coll barra blue hPadding_2 vPadding">

					<form class="form formStyle intraPadding_3 colls colls-4">
					<fieldset>
						<legend><span>ACESSE O SEU CONSÓRCIO</span></legend>
						<p class="coll margin">
							<label>CPF</label>
							<input type="text"  name="teste" />
						</p>
						<p class="coll margin">
							<label>SENHA</label>
							<input type="text"  name="teste" />
						</p>
						<p class="coll call2action margin">
							<input type="submit" class="buttonSend animate"  name="teste" value="ACESSAR" />
						</p>
						<p class="coll helpLogin">
							<a href="#" target="_blank">Esqueci minha Senha</a>
							<a href="#" target="_blank">É o meu primeiro acesso</a>
						</p>
					</form>	
				</div>
		</div>
		<ul class="nRow grid items border colls colls-2 vPadding hPadding shadowHover">
			
			<li class="coll item intraMargin-bottom headerYes boleto animate">
				<a class="intraPadding_2 animate" href="#">
					<h5 class="title">2ª VIA DE BOLETO</h5>
					<p class="resume">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt in magni veniam fugiat, at eum aliquam assumenda hic doloribus, perferendis quo velit eius</p>
				</a>
			</li>

			<li class="coll item intraMargin-bottom headerYes assembleias animate">
				<a class="intraPadding_2 animate" href="#">
					<h5 class="title">DATAS DE ASSEMBLEIAS</h5>
					<p class="resume">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt in magni veniam fugiat, at eum aliquam assumenda hic doloribus, perferendis quo velit eius</p>
				</a>
			</li>

			<li class="coll item intraMargin-bottom headerYes lances animate">
				<a class="intraPadding_2 animate" href="#">
					<h5 class="title">OFERTAR LANCES</h5>
					<p class="resume">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt in magni veniam fugiat, at eum aliquam assumenda hic doloribus, perferendis quo velit eius</p>
				</a>
			</li>

			<li class="coll item intraMargin-bottom headerYes valores animate">
				<a class="intraPadding_2 animate" href="#">
					<h5 class="title">VALORES A DEVOLVER</h5>
					<p class="resume">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt in magni veniam fugiat, at eum aliquam assumenda hic doloribus, perferendis quo velit eius</p>
				</a>
			</li>

			
		</ul>
		<div class="nRow colls colls-full">
				<div class="coll barra greyscale hPadding vPadding">
				<p class="horario">Você conseguiu <strong>encontrar</strong> o que <strong>procurava?</strong>. Você pode nos enviar as suas dúvidas para <strong>contato@globoconsorcio.com.br</strong>.
				</div>
		</div>
			
		</main>



</article>

<?php get_footer(); ?>