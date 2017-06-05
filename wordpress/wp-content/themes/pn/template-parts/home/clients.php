<?php
/**
 * Template part for displaying Home - Clients
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package prospectnow
 */
 
if( have_rows('prospectnow_clients_logos') ) :

?>

<section class="page-section" id="UsingProspectNow">
	<div class="container">
		
		<?php if ( get_field('prospectnow_clients_section_title') ) : ?>
		<h1 class="section-title"><?php the_field('prospectnow_clients_section_title'); ?></h1>
		<?php endif; ?>
		
		<div class="logos">
			<ul>
			<?php while( have_rows('prospectnow_clients_logos') ): the_row(); ?>
				<li>
				<?php $client_logo = get_sub_field('prospectnow_clients_logos_logo'); ?>
				<?php $size = 'client-logo'; ?>
				<?php echo wp_get_attachment_image( $client_logo, $size ); ?>
				</li>
			<?php endwhile; ?>
			</ul>
		</div>
		
		<?php if( have_rows('prospectnow_clients_testimonials') ) : ?>
		<div class="testimonials">
			
			<?php while( have_rows('prospectnow_clients_testimonials') ): the_row(); ?>
			
			<div class="testimony">
				
				<?php if ( get_sub_field('prospectnow_clients_testimonials_avatar') ) : ?>
				<div class="avatar">
					<div class="border">
						<?php $avatar = get_sub_field('prospectnow_clients_testimonials_avatar'); ?>
						<?php $size = 'thumbnail'; ?>
						<?php echo wp_get_attachment_image( $avatar, $size ); ?>
					</div>
					<span class="quote-sign">&quot;</span>
				</div>
				<?php endif; ?>
				
				<div class="testimony-text">
					
					<?php if ( get_sub_field('prospectnow_clients_testimonials_name') ) : ?>
					<h4 class="name"><?php the_sub_field('prospectnow_clients_testimonials_name'); ?></h4>
					<?php endif; ?>
					
					<?php if ( get_sub_field('prospectnow_clients_testimonials_title') ) : ?>
					<h5 class="title"><?php the_sub_field('prospectnow_clients_testimonials_title'); ?></h5>
					<?php endif; ?>
					
					<?php if ( get_sub_field('prospectnow_clients_testimonials_quote') ) : ?>
					<?php the_sub_field('prospectnow_clients_testimonials_quote'); ?>
					<?php endif; ?>
					
				</div>
				
			</div>
			
			<?php endwhile; ?>
			
		</div>
		<?php endif; ?>
		
		<?php if ( get_field('prospectnow_clients_button_text') ) : ?>
		<?php $buttonText = get_field('prospectnow_clients_button_text'); ?>
		<div class="actions">
			<md-button href="<?php the_field('prospectnow_clients_button_url') ?>" class="md-raised button orange" title="<?php echo $buttonText; ?>"><?php echo $buttonText; ?></md-button>
		</div>
		<?php endif; ?>
		
	</div>
</section>

<?php endif; ?>