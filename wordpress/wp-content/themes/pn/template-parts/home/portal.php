<?php
/**
 * Template part for displaying Home - Portal
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package prospectnow
 */

if ( get_field('prospectnow_portal_real_estate_content') || get_field('prospectnow_portal_lenders_content') ) :

?>

<section class="page-section" id="Portal" ng-controller="PortalController">
	<div class="container">

		<?php if ( get_field('prospectnow_portal_section_title') ) : ?>
		<h1 class="section-title"><?php the_field('prospectnow_portal_section_title'); ?></h1>
		<?php endif; ?>

		<?php if ( get_field('prospectnow_portal_real_estate_content') ) : ?>
		<div class="portal-section" id="RealEstateAgent">

			<?php if ( get_field('prospectnow_portal_real_estate_agents_title') ) : ?>
			<h2><?php the_field('prospectnow_portal_real_estate_agents_title'); ?></h2>
			<?php endif; ?>

			<div class="portal-image-wrap">
				<?php
				$realEstateImage = get_field('prospectnow_portal_real_estate_agents_image');
				$realEstateSize = 'home-options'; // (thumbnail, medium, large, full or custom size)
				$realEstateHasSpecialDialog = get_field('prospectnow_portal_real_estate_agents_extra');

				if( $realEstateImage ) : ?>
				<?php if($realEstateHasSpecialDialog) : ?>
					<a href="#" ng-click="openVideo($event)" class="video-dialog" data-dialog="<?php echo $realEstateHasSpecialDialog; ?>">
				<?php endif; ?>
				<?php echo wp_get_attachment_image( $realEstateImage, $realEstateSize ); ?>
				<?php endif; ?>
				<?php if ( get_field('prospectnow_portal_real_estate_agents_image_caption') ) : ?>
				<span><?php the_field('prospectnow_portal_real_estate_agents_image_caption'); ?></span>
				<?php endif; ?>
				<?php if($realEstateHasSpecialDialog) : ?>
					</a>
				<?php endif; ?>
			</div>

			<?php the_field('prospectnow_portal_real_estate_content'); ?>

			<?php if ( get_field('prospectnow_portal_real_estate_agents_button_text') ) : ?>
			<?php $buttonText = get_field('prospectnow_portal_real_estate_agents_button_text'); ?>
			<div class="actions">
				<md-button href="<?php the_field('prospectnow_portal_real_estate_agents_button_url'); ?>" class="md-raised button orange" title="<?php echo $buttonText; ?>"><?php echo $buttonText; ?></md-button>
			</div>
			<?php endif; ?>

		</div>
		<?php endif; ?>

		<?php if ( get_field('prospectnow_portal_lenders_content') ) : ?>
		<div class="portal-section" id="Lender">

			<?php if ( get_field('prospectnow_portal_lenders_title') ) : ?>
			<h2><?php the_field('prospectnow_portal_lenders_title'); ?></h2>
			<?php endif; ?>

			<div class="portal-image-wrap">
				<?php
				$lenderImage = get_field('prospectnow_portal_lenders_image');
				$lenderSize = 'home-options'; // (thumbnail, medium, large, full or custom size)
				$lenderHasSpecialDialog = get_field('prospectnow_portal_lenders_extra');
				if( $lenderImage ) : ?>
					<?php if($lenderHasSpecialDialog): ?>
						<a href="#" ng-click="openVideo($event)" class="video-dialog" data-dialog="<?php echo $lenderHasSpecialDialog; ?>">
					<?php endif; ?>
				<?php echo wp_get_attachment_image( $lenderImage, $lenderSize ); ?>
				<?php endif; ?>
				<?php if ( get_field('prospectnow_portal_lenders_image_caption') ) : ?>
				<span><?php the_field('prospectnow_portal_lenders_image_caption'); ?></span>
				<?php endif; ?>
				<?php if($lenderHasSpecialDialog): ?>
						</a>
				<?php endif; ?>

			</div>

			<?php the_field('prospectnow_portal_lenders_content'); ?>

			<?php if ( get_field('prospectnow_portal_lenders_button_text') ) : ?>
			<?php $buttonText = get_field('prospectnow_portal_lenders_button_text'); ?>
			<div class="actions">
				<md-button href="<?php the_field('prospectnow_portal_lenders_button_url'); ?>" class="md-raised button green" title="<?php echo $buttonText; ?>"><?php echo $buttonText; ?></md-button>
			</div>
			<?php endif; ?>

		</div>
		<?php endif; ?>

	</div>
</section>

<?php endif; ?>