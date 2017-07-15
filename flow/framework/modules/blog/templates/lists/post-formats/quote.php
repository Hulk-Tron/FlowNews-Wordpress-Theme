<article id="post-<?php the_ID(); ?>" <?php post_class($featured_class); ?>>
	<div class="eltd-post-content" style="background-image: url(' <?php echo flow_elated_kses_img($image[0]); ?> ')">
		<?php if($featured_class != ''){ ?>
			<div class="eltd-featured-triangle-holder">
				<div class="eltd-featured-triangle"></div>
				<span class="icon_star_alt"></span>
			</div>
		<?php } ?>
		<div class="eltd-post-text">
			<div class="eltd-post-text-inner">
				<?php if ( $quote_text !== '' ) { ?>
					<div class="eltd-quote-icon">
						<span class="icon_quotations"></span>
					</div>
					<div class="eltd-quote-text">
						<?php echo wp_kses($quote_text, array('p')); ?>
					</div>
				<?php } ?>
				<?php flow_elated_get_module_template_part('templates/lists/parts/title', 'blog'); ?>
				<div class ="eltd-post-info-wrapper">
					<div class="eltd-post-info eltd-left-section">
						<?php flow_elated_post_info(array(
							'date' => 'yes',
							'comments' => 'yes',
							'like' => 'yes'
						))
						?>
					</div>
				</div>
			</div>
		</div>
	</div>
</article>