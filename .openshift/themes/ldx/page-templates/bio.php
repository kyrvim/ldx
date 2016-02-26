<?php
/**
 * Template Name: Bio
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header('search'); ?>
	
	<section id="primary" class="content-area">
		<div class="block-bio">		
			<div id="content" class="site-content" role="main">

				<div class="bio-title">
					<h1>Muito prazer, Somos a LdX! :)</h1>
				</div>

				<div class="bio-banner">
					<?php twentyfourteen_post_thumbnail(); ?>
				</div> 

				<div class="bio-content">
					<p>Uma agência digital, com foco no comércio local. Desenvolvemos lojas virtuais e sites institucionais 
					com as ferramentas top de mercado. As mesmas útilizadas por empresas de sucesso em diversos países.</p>

					<p>Nossa meta é informatizar o comércio local de Xerém. Acreditando na premissa que a internet cria novas possibilidades,
					novos casos de sucesso, Potencializa negócios e transforma carreiras, oferecer um serviço de qualidade por um preço 
					que o comerciante possa pagar. E manter este site como um primeiro contato entre o comércio de Xerém e o comércio eletrônico local.</p>

					<p>Com um design simples e funcional, nosso sistema conecta o comércio local aos moradores de Xerém. E nossa primeira missão é catalogar todo e qualquer comerciante de Xerém 
					que queira ceder informações para seu público alvo. Esse comerciante então efetua seu cadastro e passa a ter sua marca e seus dados divulgados em nossas redes sociais,
					blogs e futuramente mídias impressas.</p>

					<p>Então navegue e aproveite para compartilhar esta novidade em suas redes sociais. Xerém só tem a crescer com este projeto.</p>
				</div>
			</div><!-- #content -->
		</div>
	</section><!-- #primary -->

<?php
get_sidebar( 'content' );
get_sidebar();
get_footer();
