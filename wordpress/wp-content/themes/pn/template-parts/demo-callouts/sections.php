<?php
/**
 * Template part for displayed the Demo Callout Sections
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package prospectnow
 */

?>

<span class="demo-sections">

	<?php $i = 1; ?>
	<?php if( have_rows('prospectnow_demo_callouts_page_section') ): ?>
	<?php while( have_rows('prospectnow_demo_callouts_page_section') ): the_row(); ?>
	<?php
		$title = get_sub_field('prospectnow_demo_callouts_page_section_title');
		$content = get_sub_field('prospectnow_demo_callouts_page_section_content');
		$oembed = get_sub_field('prospectnow_demo_callouts_page_section_oembed');
	?>	
	<section id="section-<?php echo $i; ?>" class="page-section">
		<div class="container">
			<div layout="row" layout-xs="column">
				
				<div class="flex" ng-controller="PortalController">
					<div class="video-wrap">
						<?php
							$image = get_sub_field('prospectnow_demo_callouts_page_section_video_thumbnail');
							$size = 'demo-callout-image';
							if( $image ) { ?>
								
								<?php echo wp_get_attachment_image( $image, $size ); ?>
								<a href="#" title="Play Video" class="video-dialog fa fa-play-circle-o" data-video-url="<?php echo $oembed; ?>" data-title="<?php echo $title; ?>" data-id="section-<?php echo $i; ?>"><span>Play Video</span></a>
								
							<?php } else {
								echo '<img src="http://placehold.it/485x255/ffffff/222222/?text=NO+IMAGE+SET" />';	
							}
						?>
					</div>
				</div>
				
				<div class="flex entry-content">
					<h1><?php echo $title; ?></h1>
					<?php echo $content; ?>
				</div>
			
			</div>
		</div>
	</section>
	<?php $i++; ?>
	<?php endwhile; ?>
	<?php endif; ?>
	
	<md-backdrop class="md-dialog-backdrop md-opaque ng-scope" aria-hidden="true"></md-backdrop>
	<div class="md-scroll-mask" aria-hidden="true"><div class="md-scroll-mask-bar"></div></div>
	<md-dialog aria-label="Video Viewer" class="pn-modal" flex="40">
		<md-toolbar>
			<div class="md-toolbar-tools">
				<span class="title"></span>
				<span flex></span>
				<md-button class="md-icon-button close-modal" aria-label="Close Dialog"><i class="fa fa-times" aria-hidden="true"></i></md-button>
			</div>
		</md-toolbar>
		<md-dialog-content>
			<div class="md-dialog-content">
	
				<div class="video-wrap">
				<iframe width="100%" id="videoPlaying" height="315" src="" frameborder="0" allowfullscreen></iframe>
				</div>
	
				<?php $i = 1; ?>
				<?php if( have_rows('prospectnow_demo_callouts_page_section') ): ?>
				<div class="other-videos popup">
					<h3>Other Videos</h3>
					<ul>
						<?php while( have_rows('prospectnow_demo_callouts_page_section') ): the_row(); ?>
						<?php
						$title = get_sub_field('prospectnow_demo_callouts_page_section_title');
						$oembed = get_sub_field('prospectnow_demo_callouts_page_section_oembed');
						?>	
						<li><a href="#" title="<?php echo $title; ?>" class="video" data-video-url="<?php echo $oembed; ?>" data-title="<?php echo $title; ?>" data-id="section-<?php echo $i; ?>"><?php echo $title; ?></a></li>
						<?php $i++; ?>
						<?php endwhile; ?>
					</ul>
				</div>
				<?php endif; ?>
	
			</div>
		</md-dialog-content>
	
		<md-dialog-actions layout="row">
			<span flex></span>
			<md-button class="md-link md-warn link close-modal">Close</md-button>
		</md-dialog-actions>
	</md-dialog>


</span>