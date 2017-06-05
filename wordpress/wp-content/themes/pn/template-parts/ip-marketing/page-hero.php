<?php
/**
 * Template part for displaying IP Marketing - Page Hero
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package prospectnow
 */

?>

<section class="page-section" id="IPHero">
	<div class="container">
		
		<?php if ( get_field('prospectnow_ip_marketing_page_hero_title') ) : ?>
		<h1 class="section-title"><?php the_field('prospectnow_ip_marketing_page_hero_title'); ?></h1>
		<?php endif; ?>
		
		<div class="row">
			
		<?php $heroImage = get_field('prospectnow_ip_marketing_page_hero_image'); ?>
		<?php $size = 'full'; ?>
		<?php if( $heroImage ) : ?>		
		<div class="ip-hero-img">
			<?php echo wp_get_attachment_image( $heroImage, $size ); ?>
		</div>
		<?php endif; ?>
		
		<?php if ( get_field('prospectnow_ip_marketing_page_hero_content') ) : ?>
		<div class="ip-hero-content">
			<?php the_field('prospectnow_ip_marketing_page_hero_content'); ?>
		</div>
		<?php endif; ?>
		
		</div>
		
		<?php
			// button vars
			$button1text = get_field('prospectnow_ip_marketing_page_hero_button1_text');
			$button1url = get_field('prospectnow_ip_marketing_page_hero_button1_url');
			$button2text = get_field('prospectnow_ip_marketing_page_hero_button2_text');
			$button2url = get_field('prospectnow_ip_marketing_page_hero_button2_url');
			
			if ( $button1text || $button1url || $button2text || $button2url ) :
		?>
		<div class="section-actions">
			
			<?php if ( $button1text ) : ?>
			<md-button class="md-raised button orange" href="<?php echo $button1url; ?>"><?php echo $button1text; ?></md-button>
			<?php endif; ?>
			
			<?php if ( $button2text ) : ?>
			<md-button class="md-raised button link " href="<?php echo $button2url; ?>"><?php echo $button2text; ?></md-button>
			<?php endif; ?>
			
		</div>
		<?php endif; ?>
		
	</div>
</section>