<?php
/**
 * Template part for displaying About - Content
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package prospectnow
 */
?>

<div class="page-section about-main-content ntp">
	
	<div class="container">
	
		<div layout="row" layout-align="center" layout-wrap layout-padding>
	
			<div flex="40">
				<div class="entry-content">
					<?php 
					$image = get_field('prospectnow_about_main_content_image');
					$size = 'large'; // (thumbnail, medium, large, full or custom size)
					if( $image ) : ?>
					<?php echo wp_get_attachment_image( $image, $size ); ?>
					<?php endif; ?>
				</div>
			</div>
	
			<div class="content" flex="60">
	
				<header class="entry-header">
					<?php
						if ( get_field('prospectnow_about_main_content_title') ) {
							$title = get_field('prospectnow_about_main_content_title');
						} else {
							$title = get_the_title();
						}
					?>
					<h1 class="section-title left entry-title"><?php echo $title; ?></h1>
				</header>
	
				<div class="entry-content">
					<?php if ( get_field('prospectnow_about_main_content') ) : ?>
					<?php the_field('prospectnow_about_main_content'); ?>
					<?php endif; ?>
				</div>
	
			</div>
	
		</div>
	
	</div>

</div>
