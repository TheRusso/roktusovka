<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package bloggist
 */

?>

<article id="post-<?php the_ID(); ?>" >
	<?php if ( has_post_thumbnail() ) : ?>
        <div class="featured-img-box">
            <a href="<?php the_permalink() ?>" class="featured-thumbnail" rel="bookmark">
                <div class="featured-thumbnail-inner" style="background-image:url(<?php the_post_thumbnail_url('full'); ?>);">
                </div>
            </a>
	<?php else : ?>
	   <div class="no-featured-img-box">
	<?php endif; ?>
	<div class="content-wrapper">
		<header class="entry-header">
			<?php
			if ( is_singular() ) :
				the_title( '<h1 class="entry-title kpss">', '</h1>' );
			else :
				the_title( '<h2 class="entry-title kpss"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			endif;
		</header><!-- .entry-header -->

		<div class="entry-content">
			<?php
			the_excerpt( sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'bloggist' ),
					array(
						'span' => array(
							'class' => array(),
							),
						)
					),
				get_the_title()
				) );


			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'bloggist' ),
				'after'  => '</div>',
				) );
				?>
				<div class="text-center">
					<a href="<?php the_permalink() ?>" class="blogpost-button"><?php echo __('+', 'bloggist') ?></a>
				</div>
			</div><!-- .entry-content -->

		</div>
		</div>
	</article><!-- #post-<?php the_ID(); ?> -->
