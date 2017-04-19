<?php
/**
 * The bootstrap template for displaying search results pages
 * @author: James Soller
 * @package WordPress
 * @subpackage mybootstrap
 * @since mybootstrap 1.0
 */

get_header(); ?>


<div class="container">
  <div class="row">
    <div class="col-md-9">

		<?php if ( have_posts() ) : ?>

			<header>
				<h1><?php printf( __( 'Search Results for: %s', 'mybootstrap' ), '<span>' . esc_html( get_search_query() ) . '</span>' ); ?></h1>
			</header><!-- .page-header -->

			<?php
			// Start the loop.
			while ( have_posts() ) : the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'search' );

			// End the loop.
			endwhile;

			// Previous/next page navigation.
			the_posts_pagination( array(
				'prev_text'          => __( 'Previous page', 'mybootstrap' ),
				'next_text'          => __( 'Next page', 'mybootstrap' ),
				'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'mybootstrap' ) . ' </span>',
			) );

		// If no content, include the "No posts found" template.
		else :
			get_template_part( 'template-parts/content', 'none' );

		endif; ?>
      
       
  </div><!--content-area-->
  <div class="col-md-3">
        <?php get_sidebar('sidebar-1'); ?>
    </div>
 </div>
</div>

<?php get_footer(); ?>

