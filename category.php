<?php
/**
 * The template for displaying Category pages
 *
 * Used to display archive-type pages for posts in a category.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

	<section id="primary" class="site-content">
		<div id="content" role="main">

		<?php if ( have_posts() ) : ?>
			<header class="archive-header">
				<h1 class="archive-title"><?php printf( __( 'Category Archives: %s', 'twentytwelve' ), '<span>' . single_cat_title( '', false ) . '</span>' ); ?></h1>

			<?php if ( category_description() ) : // Show an optional category description ?>
				<div class="archive-meta"><?php echo category_description(); ?></div>
			<?php endif; ?>
			</header><!-- .archive-header -->






			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post(); 

?>

<div id='deta-cat'>
<div id="gen-cat"><h4><a href='<?php the_permalink();?>'><?php the_title();?></a></h4><br>
<span class="txt-cat"><?php echo substr(strip_tags($post->post_content), 0, 220);?>...</span>
<a style="display:block;  width:100%; margin-top:16px; text-align:right;" href='<?php the_permalink();?>'><span class="fa fa-file-text-o"></span>Leer más</a>
 </div>

<a class='img-cat' href='<?php the_permalink();?>'><?php the_post_thumbnail();?></a>
</div>


				
			<?php endwhile;  ?>










		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		<?php endif; ?>

		</div><!-- #content -->
	</section><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>