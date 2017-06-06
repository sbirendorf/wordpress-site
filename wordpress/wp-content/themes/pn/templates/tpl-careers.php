<?php
/**
 * Template Name: Careers
 *
 * This is the template that displays the Careers
 *
 * @package prospectnow
 */

get_header(); ?>
<?php
	if(have_posts()):
		while(have_posts()): the_post();
?>
<div class="page-header careersHeader">
	<div class="container">
		<h1><?php the_title(); ?></h1>
		<h2>Come Help Us Change the Real Estate Industry</h2>		
	</div>
</div>
<div class="page-wrapper careersPage">
	<div class="container entry-content">
		<?php the_content(); ?>
		
		
<?php endwhile; ?>
<?php endif; ?>
		
		<?php
			$args = array(
			'post_type'			=>	'career',
			'orderby'			=>	'menu_order',
			'order'				=>	'ASC',
			'posts_per_page'	=>	9999,
			);
		?>
		<?php $posts = new WP_Query( $args ); ?>
		
		<?php if($posts->have_posts()) : ?>
		
		<div class="accordion">
			
			<?php while($posts->have_posts()) : $posts->the_post(); ?>
			
			<?php
				// variables
				$jobLocation = get_field('prospectnow_career_location');
				$jobType = get_field('prospectnow_career_employment_type');
				$jobUrl = get_field('prospectnow_career_external_job_link');	
			?>
			
			<div id="career-<?php the_ID(); ?>" <?php post_class(); ?>>
				<h2 class="accordion-title"><?php the_title(); ?></h2>
				<div class="accordion-content">
					
					<?php if ( $jobLocation || $jobType ) : ?>
					<ul class="career-details">
						<?php if ( $jobLocation ) : ?>
						<li><?php echo $jobLocation; ?></li>
						<?php endif; ?>
						<?php if ( $jobType ) : ?>
						<li><?php echo $jobType; ?></li>
						<?php endif; ?>
					</ul>
					<?php endif; ?>
					
					<?php the_content(); ?>
					
					<?php if ( $jobUrl ) : ?>
					<?php $job_url = get_field('prospectnow_career_external_job_link'); ?>
					<p><md-button href="<?php echo $jobUrl; ?>" class="md-raised button orange">I'm Interested</md-button>
					<?php endif; ?>
					
				</div>
			</div>
			
			<?php endwhile; ?>
			
		</div>
		
		<?php endif; wp_reset_postdata(); ?>
		
	</div>
</div>

<?php get_footer(); ?>
