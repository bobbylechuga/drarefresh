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
</div><!-- #page -->
<div class="footer">
	<div class="container">
		<div class="row content-footer">
			<div class="one-third column">
			 <h5><i class="fa fa-home"></i>Ubicación</h5>
			</div>
			<div class="one-third column">
			2
			</div>
			<div class="one-third column">
			3
			</div>
		</div>
	</div>
</div>
<div class="colofon">
	<div class="container">
		Políticas de privacidad
	</div>
</div>

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
