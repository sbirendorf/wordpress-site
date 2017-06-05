<?php
/**
 * Template part for displaying Contact Content
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package prospectnow
 */

?>

<div class="contact-content">
		
	<?php 
		$image = get_field('prospectnow_contact_content_image');
		$size = 'medium'; // (thumbnail, medium, large, full or custom size)
		if( $image ) {
			echo wp_get_attachment_image( $image, $size );
		}
	?>
	
	<header class="entry-header">
		<?php
			if ( get_field('prospectnow_contact_title') ) {
				$title = get_field('prospectnow_contact_title');
			} else {
				$title = get_the_title();	
			}
		?>
		<h1 class="entry-title"><?php echo $title; ?></h1>
	</header>
	
	<?php if ( get_field('prospectnow_contact_content') ) : ?>
	<div class="entry-content">
		<?php the_field('prospectnow_contact_content'); ?>
	</div>
	<?php endif; ?>

</div>