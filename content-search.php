<?php
/**
 * The template part for displaying results in search pages
 *
 * @package WordPress
 * @subpackage mybootstrap
 * @since mybootstrap 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <ul>
    <li class="col-xs-6 col-sm-4">
   <?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
	
    <?php the_post_thumbnail('archive-size'); ?>

	<?php the_excerpt(); ?>

	<?php if ( 'post' === get_post_type() ) : ?>
   </li>
  </ul>
      
<?php endif; ?>
</article><!-- #post-## -->
