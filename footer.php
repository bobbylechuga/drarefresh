<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
	</div><!-- #main .wrapper -->
	<footer id="colophon" role="contentinfo">
<div style="width:790px; height:80px; margin:0 auto; text-align:center;font-size:12px!important;">
<span style="display:block;">Dirección: Estoril 200 oficina 937, Las Condes - Tabancura 1185 4to piso, Vitacura - Clinica Tabancura. </span>
<span style="display:block;"><span class="fa fa-phone"></span> +56 222441458 - <span class="fa fa-envelope-o"></span> contacto@doctoranavarrete.cl</span>

</div>

		<div class="site-info" style="display:none;">
			<?php do_action( 'twentytwelve_credits' ); ?>
			<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'twentytwelve' ) ); ?>" title="<?php esc_attr_e( 'Semantic Personal Publishing Platform', 'twentytwelve' ); ?>"><?php printf( __( 'Proudly powered by %s', 'twentytwelve' ), 'WordPress' ); ?></a>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
	<script>
			jQuery(document).scroll(function () {
			var y = jQuery(this).scrollTop();
			if (y > 100) {
				jQuery('#flecha').fadeIn();
			} else {
				jQuery('#flecha').fadeOut();
			}

		});
	</script>
	<?php if(is_page(484)) : ?>
		<style>
			.free_corto, .busy_corto, .notpossible_corto {
				width: 10px;
				height: 10px;
				padding: 5px;
			}
			.free_corto {			
				background-color: #01CFCC;
			}
			.busy_corto {			
				background-color: #B51424;
			}
			.notpossible_corto {			
				background-color: #A1A1A1;
			}
		</style>
		<script>			
			//Free
			jQuery(".appointments-legend-table td.free").html("<div class=\"free_corto\"></div>");
			jQuery(".appointments-legend-table td.free").removeClass(); 
			//Busy
			jQuery(".appointments-legend-table td.busy").html("<div class=\"busy_corto\"></div>");
			jQuery(".appointments-legend-table td.busy").removeClass(); 
			//notpossible
			jQuery(".appointments-legend-table td.notpossible").html("<div class=\"notpossible_corto\"></div>");
			jQuery(".appointments-legend-table td.notpossible").removeClass();
			//app_monthly_schedule_wrapper
			jQuery(".app_monthly_schedule_wrapper table").addClass("calendario");
			var tr = jQuery(".calendario").find("tfoot");
			tr.find("tr:last").remove();
		</script>		
	<?php endif; ?>
</body>
</html>
