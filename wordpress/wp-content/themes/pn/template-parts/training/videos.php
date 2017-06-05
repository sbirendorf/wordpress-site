<?php
/**
 * Template part for displaying the Videos on the Training Template
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package prospectnow
 */

$title = get_field('prospectnow_training_videos_title');
$description = get_field('prospectnow_training_videos_description');

if( have_rows('prospectnow_training_videos') ) :

?>

<?php if ( $title ) : ?>
<section class="page-section">
<?php else : ?>
<div class="page-section">
<?php endif; ?>
	<div class="container entry-content">
		
		<?php if ( $title ) : ?>
		<h1><?php echo $title; ?></h1>
		<?php endif; ?>
		
		<?php if ( $description ) : echo $description; endif; ?>
	
		<div class="training-videos-wrap">
			
			<?php
				/*
				 * Grab first row of Videos and output the Video URL
				 */
				$rows = get_field('prospectnow_training_videos');
				$firstVideo = $rows[0];
				$firstVideoURL = $firstVideo['prospectnow_training_videos_video_url' ];
			?>
			<div class="video-wrap">
				<iframe width="100%" id="videoPlaying" height="315" src="<?php echo $firstVideoURL; ?>" frameborder="0" allowfullscreen></iframe>
			</div>
				
			<div class="other-videos training">
				<ul>
					<?php 
						while( have_rows('prospectnow_training_videos') ): the_row(); 
							$videoURL = get_sub_field('prospectnow_training_videos_video_url');
							$videoTitle = get_sub_field('prospectnow_training_videos_video_title');
							$videoDescription = get_sub_field('prospectnow_training_videos_video_description');
					?>
					<li>
						<a href="#" title="<?php echo $videoTitle; ?>" class="video" data-video-url="<?php echo $videoURL; ?>">
							<h4 class="other-title"><?php echo $videoTitle; ?></h4>
							<?php echo $videoDescription; ?>
						</a>
					</li>
					<?php endwhile; ?>
				</ul>

				
			</div>
		
		</div>
		
	</div>
<?php if ( $title ) : ?>
</section>
<?php else : ?>
</div>
<?php endif; ?>

<?php endif; ?>
