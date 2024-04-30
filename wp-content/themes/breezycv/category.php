<?php
/**
 * The template for displaying Category pages
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 */

get_header(); ?>
<div class="content-area single-page-area">
    <div class="single-page-content">
        <div class="content-wrapper">
			<?php if ( have_posts() ) : ?>

				<h2 class="page-title"><?php printf( esc_html__( 'Category Archives: %s', 'breezycv' ), single_cat_title( '', false ) ); ?></h2>

			<?php
					// Start the Loop.
					while ( have_posts() ) : the_post();

					/*
					 * Include the post format-specific template for the content. If you want to
					 * use this in a child theme, then include a file called called content-___.php
					 * (where ___ is the post format) and that will be used instead.
					 */
					get_template_part( 'content', get_post_format() );

					endwhile;
					// Previous/next page navigation.
					breezycv_theme_paging_nav();

				else :
					// If no content, include the "No posts found" template.
					get_template_part( 'content', 'none' );

				endif;
			?>
		</div>
    </div>
</div>
<?php
get_footer();
