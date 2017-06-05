<?php
/**
 * Template part for displaying Contact Map
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package prospectnow
 */

if ( get_field('prospectnow_contact_map_embed_code') ) :

?>

<div class="map">
	<?php the_field('prospectnow_contact_map_embed_code'); ?>	
</div>

<?php endif; ?>