<?php if ( 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']) ) return; ?>
<section id="comments">
<?php 
if ( have_comments() ) : 
global $comments_by_type;
$comments_by_type = &separate_comments( $comments );
if ( ! empty($comments_by_type['comment']) ) : 
?>
<section id="comments-list" class="comments">
<h3 class="comments-title"><?php comments_number(); ?></h3>
<?php if ( get_comment_pages_count() > 1 ) : ?>
<nav id="comments-nav-above" class="comments-navigation" role="navigation">
<div class="paginated-comments-links"><?php paginate_comments_links(); ?></div>
</nav>
<?php endif; ?>
<ul>
<?php wp_list_comments('type=comment'); ?>
</ul>
<?php if ( get_comment_pages_count() > 1 ) : ?>
<nav id="comments-nav-below" class="comments-navigation" role="navigation">
<div class="paginated-comments-links"><?php paginate_comments_links(); ?></div>
</nav>
<?php endif; ?>
</section>
<?php 
endif; 
if ( ! empty($comments_by_type['pings']) ) : 
$ping_count = count($comments_by_type['pings']); 
?>
<section id="trackbacks-list" class="comments">
<h3 class="comments-title"><?php echo '<span>'.$ping_count.'</span> '.($ping_count > 1 ? __( 'Trackbacks', 'blankslate' ) : __( 'Trackback', 'blankslate' ) ); ?></h3>
<ul>
<?php wp_list_comments('type=pings&callback=blankslate_custom_pings'); ?>
</ul>
</section>
<?php 
endif; 
endif;

$comments_args = array(
        // change the title of send button 
        'label_submit'=>'Send',
        // change the title of the reply section
        'title_reply'=>'Write a Reply or Comment',
        // remove "Text or HTML to be displayed after the set of comment fields"
        'comment_notes_after' => '',
        // redefine your own textarea (the comment body)
        'comment_field' => '<p class="comment-form-comment"><label for="comment">' . _x( 'Comment', 'noun' ) . '</label><br /><textarea id="comment" cols="45" rows="8" name="comment" aria-required="true"></textarea></p>',
);

if ( comments_open() ) comment_form($comments_args);
?>
</section>