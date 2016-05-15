<?php
/**
 * The template for displaying Category pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

	<section id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

			<?php if ( have_posts() ) : ?>

			<header class="archive-header">

        <?php if ( is_category('black-ops-3') ) { ?>
          <h1 class="archive-header-image"><img src="<?php echo site_url(); ?>/wp-content/uploads/2016/05/call-of-duty-black-ops-3.jpg" alt="Call Of Duty: Black Ops 3" / /></h1>
        <?php }elseif ( is_category('infinite-warfare') ) { ?>
          <h1 class="archive-header-image"><img src="<?php echo site_url(); ?>/wp-content/uploads/2016/05/call-of-duty-infinite-warfare.jpg" alt="Call Of Duty: Infinite Warfare" / /></h1>
        <?php }else{ ?>
				  <h1 class="archive-title"><?php printf( __( 'Category Archives: %s', 'twentyfourteen' ), single_cat_title( '', false ) ); ?></h1>
        <?php }; ?>

				<?php
					// Show an optional term description.
					$term_description = term_description();
					if ( ! empty( $term_description ) ) :
						printf( '<div class="taxonomy-description">%s</div>', $term_description );
					endif;
				?>
			</header><!-- .archive-header -->

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
					twentyfourteen_paging_nav();

				else :
					// If no content, include the "No posts found" template.
					get_template_part( 'content', 'none' );

				endif;
			?>
		</div><!-- #content -->
	</section><!-- #primary -->

<?php
get_sidebar( 'content' );
get_sidebar();
get_footer();