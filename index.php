<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>
<style>
.title
{
	display: block;
	height: 52px;
	/* line-height: 22px; */
	font-size: 14px;
	color: #000;
	/* margin-bottom: 13px; */
	clear:both;
	/* border: 1px solid red;*/
}
.title .date { float:right; padding-top: 10px;  }
.title .name { float:left; width: 80%;  }
.title .fa {
	font-size: 25px;
	color: #CCCCCC;
}
.title a {
	color: #00D2D1;
	font-size: 1.5em;
}

a:hover {
	color: #595959;
}


.txt-dest {
	 line-height: 20px; 
}
.fondo_noticia {
	height: 110px;
	border-bottom: 1px solid rgba(0,0,0,0.1);
	margin-bottom: 10px;
	position: relative;
}
.fondo_noticia a {
	text-decoration: none;
	color: #00D2D1;
	font-weight: 600;
}
a:hover {
	color: #595959;
}
.fondo_noticia img {
	float: left;
	margin-right: 10px;
}
.fondo_noticia .titulo-nota {
	font-size: 1.1em;
	padding-top: 10px;
	width: 99%;
}
.fondo_noticia .leer-mas-nota {
	position: absolute;
  bottom: 0;
	right: 0;
	padding: 0 10px 10px 0;


}
.fondo_noticia .fa {
	padding-right: 5px;
}
.leer-mas-nota a {
	color: #595959;
	font-size: 0.7em;
}
.entry-content img, .comment-content img, .widget img, img.header-image, .author-avatar img, img.wp-post-image {
  border-radius: 0px;
  box-shadow: none;
}
.cycloneslider-template-standard .cycloneslider-slide img { 	
	
}
.cycloneslider-template-standard .cycloneslider-pager span {
	margin-top: 15px;
	
}
.leer-mas-nota-dest {
	position: absolute;
    bottom: 8px;
    right: 8px;
}
.leer-mas-nota-dest a { 
	color: #595959;
	font-size: 0.7em;
	text-decoration: none;
}
.leer-mas-nota-dest .fa { 
	padding-right: 5px;
} 
</style>

<div class="slider" style="width: 1085px; margin: 25px 50px 0 auto; "><?php if( function_exists('cyclone_slider') ) cyclone_slider('portada'); ?></div>

	<div id="primary">
		<div id="content" role="main">



<!--<div id="tit-dest">Destacados</div>-->

<div id="nota-dest">
	<div id="deta-dest">
		<a href="<?php echo home_url();  ?>/procedimientos/rinoplastia/"><img src="<?php echo home_url(); ?>/wp-content/uploads/rinoplastia.jpg"></a>
		<div class="title">
        <span class="name"><h4><a href="<?php echo home_url();  ?>/procedimientos/rinoplastia/">Rinoplastia</a></h4></span>
				<a href="<?php echo home_url();  ?>/procedimientos/rinoplastia/"><span class="date fa fa-chevron-right"></span></a>
    </div>
		<p><!--<span class="txt-dest">Con la experiencia y cercanía de la Doctora Navarrete  disfrutarás de un rosto armónico con una nariz equilibrada y funcional.</span>--><img src="wp-content/themes/twentytwelve/images/dranavarrete-home.jpg"></p>
		<p class="leer-mas-nota-dest"><a href="<?php echo home_url();  ?>/procedimientos/rinoplastia/"><span class="fa fa-file-text-o"></span>Leer más</a></p>
	</div>
	<div id="deta-dest">
		<a href="<?php echo home_url();  ?>/procedimientos/septoplastia/"><img src="<?php echo home_url(); ?>/wp-content/uploads/septoplastia.jpg"></a>
		<div class="title">
			<span class="name"><h4><a href="<?php echo home_url();  ?>/procedimientos/septoplastia/">Septoplastia</a></h4></span>
			<a href="<?php echo home_url();  ?>/procedimientos/septoplastia/"><span class="date fa fa-chevron-right"></span></a>
		</div>
		<p><span class="txt-dest">Respira bien, con esta cirugía que endereza el tabique nasal.</span></p>
		<p class="leer-mas-nota-dest"><a href="<?php echo home_url();  ?>/procedimientos/septoplastia/"><span class="fa fa-file-text-o"></span>Leer más</a></p>
	</div>
	<div id="deta-dest" >
		<?php query_posts('showposts=3'); while ( have_posts() ) { the_post();?>
			<div class="fondo_noticia"><a href="<?php the_permalink();?>"><?php the_post_thumbnail( array(108, 110) );   ?></a>
				<p class="titulo-nota"><a href="<?php the_permalink();?>"><?php the_title();?></a></p>
				<p class="leer-mas-nota"><a href="<?php the_permalink();?>"><span class="fa fa-file-text-o"></span>Leer más</a></p>
			</div>
		<?php } ;?>
	</div>
</div>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>