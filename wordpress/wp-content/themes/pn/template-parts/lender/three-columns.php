<?php
/**
 * Template part for displaying Broker - Three Columns
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package prospectnow
 */

?>

<section class="page-section ntp three-columns">
	<div class="container">
		
		<?php if ( get_field('prospectnow_broker_three_columns_section_title') ) : ?>
		<h1 class="section-title"><?php the_field('prospectnow_broker_three_columns_section_title'); ?></h1>
		<?php endif; ?>
		
		<?php if( have_rows('prospectnow_broker_three_columns_column') ): ?>
	
		<div layout="row" layout-margin layout-xs="column">
			
			<?php while( have_rows('prospectnow_broker_three_columns_column') ): the_row();
				$title = get_sub_field('prospectnow_broker_three_columns_column_title');
				$content = get_sub_field('prospectnow_broker_three_columns_column_content');
			?>
			
			<div flex>
				
				<?php if ( $title ) : ?>
				<h2><?php echo $title; ?></h2>
				<?php endif; ?>
				
				<?php if ( $content ) : ?>
				<?php echo $content; ?>
				<?php endif; ?>
				
			</div>
			
			<?php endwhile; ?>
			
		</div>
		
		<?php endif; ?>
		
		<?php if ( get_field('prospectnow_broker_three_columns_button_text') ) : ?>
		<div class="actions center">
			<md-button href="<?php the_field('prospectnow_broker_three_columns_button_url'); ?>" class="md-raised button orange"><?php the_field('prospectnow_broker_three_columns_button_text'); ?></md-button>
		</div>
		<?php endif; ?>
		
	</div>
</section>