<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">

			<article id="post-0" class="post error404 no-results not-found">
				<header class="entry-header">
					<h1 class="entry-title"><?php _e( 'La informaci&oacute;n que busca no se encuentra en esta p&aacute;gina.', 'twentytwelve' ); ?></h1>
				</header>

				<div class="entry-content">
					<p><?php //_e( '&#161;Calma&#33; La Dra. Navarrete puede ayudarte a reencontrar la armon&iacute;a en tu rostro y respirar mejor por la nariz.', 'twentytwelve' ); ?></p>
<div style="margin:40px 0;"><p>Consulta ahora:</p>
- <a href="http://www.doctoranavarrete.cl/procedimientos/">Procedimientos Quirúrgicos</a> <br />
- <a href="http://www.doctoranavarrete.cl/casos-clinicos/">Rinoplastía  Antes y Después</a> <br />
- <a href="http://www.doctoranavarrete.cl/contacto/">Dudas y Preguntas a la Dra. Navarrete</a></div>

					<?php get_search_form(); ?>
				</div><!-- .entry-content -->
			</article><!-- #post-0 -->

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>
