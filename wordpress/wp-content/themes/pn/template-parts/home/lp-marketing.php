<?php
/**
 * Template part for displaying Home - LP Marketing
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package prospectnow
 */
 
if ( get_field('prospectnow_ip_marketing_content') ) :

?>

<section class="page-section" id="DigitalMarketing">
	<div class="container">
		
		<div class="inner-wrap">
			
			<?php if ( get_field('prospectnow_ip_marketing_section_title') ) : ?>
			<h1 class="section-title"><?php the_field('prospectnow_ip_marketing_section_title'); ?></h1>
			<?php endif; ?>
			
			<?php the_field('prospectnow_ip_marketing_content'); ?>
		
		</div>
		
		<?php if ( get_field('prospectnow_ip_marketing_button_text') ) : ?>
		<?php $buttonText = get_field('prospectnow_ip_marketing_button_text'); ?>
		<div class="actions">
			<img src="<?php echo get_template_directory_uri(); ?>/_assets/img/home/ip-marketing.png" alt="Direct Online Marketing Homes Illustration">
			<md-button href="<?php the_field('prospectnow_ip_marketing_button_url'); ?>" class="md-raised button orange" title="<?php echo $buttonText; ?>"><?php echo $buttonText; ?></md-button>
		</div>
		<?php endif; ?>
		
	</div>
</section>

<?php endif; ?>