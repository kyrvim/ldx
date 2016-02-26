<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<div class="block-content">
			<div class="entry-meta">
				<span class="cat-links"><?php echo get_the_category_list( _x( ', ', 'Used between list items, there is a space after the comma.', 'twentyfourteen' ) ); ?></span>
				<div class="horizontal-line"></div>
			</div>		
			<?php twentyfourteen_post_thumbnail(); ?>
			<?php if ( in_array( 'category', get_object_taxonomies( get_post_type() ) ) && twentyfourteen_categorized_blog() ) : ?>
			<?php
				endif;

				if ( is_single() ) :
					the_title( '<div class="block-entry-title"><h1 class="entry-title">', '</h1></div>' );
				else :
					the_title( '<div class="block-entry-title"><h1 class="entry-title">', '</h1></div>' );
				endif;
			?>

			<?php if ( is_search() ) : ?>
			<div class="entry-summary">
				<div class="label-endereco">
					<span>Endereço: </span>	
				</div>

				<ul class="contatos">
					<li class="label-telefone">
						<span>Telefone: </span>	
					</li>

					<li class="label-celular">
						<span>Celular: </span>	
					</li>

					<li class="label-website">
						<a href="#"><span>Website: </span></a>	
					</li>								
				</ul>

				<div class="label-funcionamento">
					<span>Funcionamento: </span>	
				</div>

				<!--<div class="redes-sociais">
					<div class="label-facebook">
						<span>F</span>	
					</div>

					<div class="label-instagram">
						<span>I</span>	
					</div>

					<div class="label-twitter">
						<span>T</span>	
					</div>

					<div class="label-youtube">
						<span>Y</span>	
					</div>				
				</div>-->

			</div><!-- .entry-summary -->
			<?php else : ?>
			<div class="entry-content">
				<?php
					/* translators: %s: Name of current post */
					the_content( sprintf(
						__( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'twentyfourteen' ),
						the_title( '<span class="screen-reader-text">', '</span>', false )
					) );

					wp_link_pages( array(
						'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentyfourteen' ) . '</span>',
						'after'       => '</div>',
						'link_before' => '<span>',
						'link_after'  => '</span>',
					) );
				?>
			</div><!-- .entry-content -->
			<?php endif; ?>

			<?php the_tags( '<footer class="entry-meta"><span class="tag-links">', '', '</span></footer>' ); ?>
		</div>
	</header><!-- .entry-header -->

</article><!-- #post-## -->
