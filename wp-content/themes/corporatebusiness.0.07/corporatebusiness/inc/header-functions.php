<?php
if ( ! function_exists( 'corporatebusiness_slider' ) ) :
/**
 * display featured post slider
 */
function corporatebusiness_slider() { ?>
	<div class="slider-wrap">
		<div class="slider-cycle">
			<?php
			for( $i = 1; $i <= 4; $i++ ) {
				$corporatebusiness_slider_title = get_theme_mod( 'slider_title'.$i , '' );
				$corporatebusiness_slider_text = get_theme_mod( 'slider_desc'.$i , '' );
				$corporatebusiness_slider_image = get_theme_mod( 'slider_image'.$i , get_template_directory_uri() . "/images/slider/$i.jpg" );
				$corporatebusiness_slider_link = get_theme_mod( 'slider_link'.$i , '#' );
echo $corporatebusiness_slider_image;
				if( !empty( $corporatebusiness_slider_image ) ) {
					if ( $i == 1 ) { $classes = "slides displayblock"; } else { $classes = "slides displaynone"; }
					?>
					<section id="featured-slider" class="<?php echo $classes; ?>">
						<figure class="slider-image-wrap">
							<img alt="<?php echo esc_attr( $corporatebusiness_slider_title ); ?>" src="<?php echo esc_url( $corporatebusiness_slider_image ); ?>">
					    </figure>
					    <?php if( !empty( $corporatebusiness_slider_title ) || !empty( $corporatebusiness_slider_text ) ) { ?>
						    <article id="slider-text-box">
					    		<div class="inner-wrap">
						    		<div class="slider-text-wrap">
						    			<?php if( !empty( $corporatebusiness_slider_title )  ) { ?>
							     			<span id="slider-title" class="clearfix"><a title="<?php echo esc_attr( $corporatebusiness_slider_title ); ?>" href="<?php echo esc_url( $corporatebusiness_slider_link ); ?>"><?php echo esc_html( $corporatebusiness_slider_title ); ?></a></span>
							     		<?php } ?>
							     		<?php if( !empty( $corporatebusiness_slider_text )  ) { ?>
							     			<span id="slider-content"><?php echo esc_html( $corporatebusiness_slider_text ); ?></span>
							     		<?php } ?>
							     	</div>
							    </div>
							</article>
						<?php } ?>
					</section><!-- .featured-slider -->
				<?php
				}
			}
			?>
		</div>
		<nav id="controllers" class="clearfix">
		</nav><!-- #controllers -->
	</div><!-- .slider-cycle -->
<?php
}
endif;

?>