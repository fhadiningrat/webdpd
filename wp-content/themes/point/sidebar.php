<?php
	if ( ! is_active_sidebar( 'sidebar' ) ) {
		return;
	}
?>

<aside class="sidebar c-4-12">
	<div id="sidebars" class="sidebar">
		<div class="sidebar_list">
			<?php if ( ! dynamic_sidebar( 'sidebar' )) : ?>
				<div id="sidebar-search" class="widget">
					<h3><?php _e('Search', 'point'); ?></h3>
					<div class="widget-wrap">
						<?php get_search_form(); ?>
					</div>
				</div>
				<div id="sidebar-archives" class="widget">
					<h3><?php _e('Archives', 'point') ?></h3>
					<div class="widget-wrap">
						<ul>
							<?php wp_get_archives( 'type=monthly' ); ?>
						</ul>
					</div>
				</div>
				<div id="sidebar-meta" class="widget">
					<h3><?php _e('Meta', 'point') ?></h3>
					<div class="widget-wrap">
						<ul>
							<?php wp_register(); ?>
							<li><?php wp_loginout(); ?></li>
							<?php wp_meta(); ?>
						</ul>
					</div>
				</div>
			<?php endif; ?>
		</div>
	</div><!--sidebars-->
</aside>
