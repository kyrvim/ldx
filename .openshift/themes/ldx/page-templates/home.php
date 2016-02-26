<?php
/**
 * Template Name: Página inicial
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
get_header('home'); ?>

<div class="principal-search">
	<div class="home-logo">
		<img src="<?php echo get_bloginfo( 'template_url' ).'/images/home_logo.jpg'; ?>" width="200px">
	</div>
	<div class="home-title-block">
		<span class="home-title">Lojas de Xerém</span>
	</div>	
	
	<div class="principal-search-box">
		<?php get_search_form(); ?>
	</div>

	<div class="home-category-block">
		<div class="home-category-title">
			<span>Menu Principal:</span>
		</div>
		
		<ul class="category-list">
			<?php ldx_home_categories(); ?>			
		</ul>
	</div>
</div>

<?php get_footer();
