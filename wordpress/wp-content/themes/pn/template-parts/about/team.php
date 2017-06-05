<?php
/**
 * Template part for displaying About - Team
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package prospectnow
 */
?>

<section class="page-section team ntp">
	<div class="container">

		<?php if ( get_field('prospectnow_about_the_team_title') ) : ?>
		<h1 class="section-title"><?php the_field('prospectnow_about_the_team_title'); ?></h1>
		<?php endif; ?>

		<div layout="row" layout-align="start" layout-wrap>

			<?php
				$args = array(
					'post_type' => 'prospect_now_team',
					'showposts' => 999,
					'order'		=> 'ASC',
					'order_by'	=> 'menu_order'
				);
				$team = new WP_Query($args);
				while ( $team->have_posts() ) : $team->the_post();
			?>

			<div flex="100" flex-gt-xs="50" flex-gt-sm="33">
				<div class="member-box">

					<?php the_post_thumbnail('thumbnail'); ?>

					<h2><?php the_title(); ?></h2>

					<?php if( get_field('prospectnow_team_fields_job_title') ): ?>
					<h3><?php the_field('prospectnow_team_fields_job_title'); ?></h3>
					<?php endif; ?>

					<?php the_content(); ?>

					<?php
						// social account variables
						$facebook = get_field('prospectnow_team_fields_facebook');
						$twitter = get_field('prospectnow_team_fields_twitter');
						$linkedin = get_field('prospectnow_team_fields_linkedin');

						if ( $facebook || $twitter || $linkedin ) :
					?>

					<ul class="social-icons">

					<?php if ( $facebook ) : ?>
					<li><a href="<?php echo $facebook; ?>" title="Facebook" class="icon-facebook" target="_blank">Facebook</a></li>
					<?php endif; ?>

					<?php if ( $twitter) : ?>
					<li><a href="<?php echo $twitter; ?>" title="Twitter" class="icon-twitter" target="_blank">Twitter</a></li>
					<?php endif; ?>

					<?php if ( $linkedin ) : ?>
					<li><a href="<?php echo $linkedin; ?>" title="LinkedIn" class="icon-linkedin" target="_blank">LinkedIn</a></li>
					<?php endif; ?>

					</ul>

					<?php endif; ?>

				</div>
			</div>

			<?php endwhile; wp_reset_postdata(); ?>

		</div>

	</div>
</section>
