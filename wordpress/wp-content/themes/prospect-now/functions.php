<?php
// add_settings_field( 'custom_carousel_delay', 'Carousel Delay', 'get_custom_carousel_delay', 'general', '', array( 'label_for' => 'custom_carousel_delay' ) );

function get_latest_blog_posts($limit=3){
	global $configVars;
	$url = 'http://blog.prospectnow.com/feed/';
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_HEADER, 0);
	$response = curl_exec($ch);
	include_once($configVars['includeDirectory'].'simplexml.class.php');
	$var = new simplexml;
	$var->ignore_level = 0;
	$var->xml_load_data($response, 'object');
	//['link']['item']

	$return_array  = array();
	$item = false;
	if(isset($var->result["channel"])){
	    $chennal = $var->result["channel"];
		$item = $chennal[0]['item'];
	}
	if(!is_array($item) || count($item)<1){
		$temp = array();
		$temp['title'] =  'Read Recent Posts';
       		$temp['link'] = '/blog';
	        $temp['date'] = date('Y-m-d');
		$t = array();
		$t[] = $temp;
		return $t; 
	}
	foreach($item as $v){	
		$temp = array();
		$temp['title'] = current($v['title']);
		$temp['link'] = current($v['link']);
		$temp['date'] = date('Y-m-d',strtotime(current($v['pubDate'])));
		$return_array[] = $temp;
	}		
	return array_slice($return_array,0,$limit);
}
function getRememberMe(){
$uname = '';
$upwd = '';
$remember = false;

if ($_COOKIE['UNAME'])
{
	$uname = $_COOKIE['UNAME'];
	$upwd = $_COOKIE['PASSWORD'];
	$remember = true;
}
return array('uname'=>$uname,'upwd'=>$upwd,'remember'=>$remember);
}
function register_my_menus() {
  register_nav_menus(
    array(
      'Footer Menu 1' => __( 'Footer Menu 1' ),
      'Footer Menu 2' => __( 'Footer Menu 2' ),
      'Footer Menu 3' => __( 'Footer Menu 3' ),
      'Footer Menu 4' => __( 'Footer Menu 4' ),
      'Footer Menu 5' => __( 'Footer Menu 5' ),
      'Interior Footer' => __( 'Interior Footer' )
    )
  );
}
add_action( 'init', 'register_my_menus' );

add_action('after_setup_theme', 'blankslate_setup');
function blankslate_setup()
{
load_theme_textdomain('blankslate', get_template_directory() . '/languages');
add_theme_support('automatic-feed-links');
add_theme_support('post-thumbnails');
global $content_width;
if ( ! isset( $content_width ) ) $content_width = 640;
register_nav_menus(
array( 'main-menu' => __( 'Main Menu', 'blankslate' ) )
);
}
add_action('wp_enqueue_scripts', 'blankslate_load_scripts');
function blankslate_load_scripts()
{
//wp_enqueue_script('jquery');
}
add_action('comment_form_before', 'blankslate_enqueue_comment_reply_script');
function blankslate_enqueue_comment_reply_script()
{
if (get_option('thread_comments')) { wp_enqueue_script('comment-reply'); }
}
add_filter('the_title', 'blankslate_title');
function blankslate_title($title) {
if ($title == '') {
return '&rarr;';
} else {
return $title;
}
}
add_filter('wp_title', 'blankslate_filter_wp_title');
function blankslate_filter_wp_title($title)
{
return $title . esc_attr(get_bloginfo('name'));
}
add_action('widgets_init', 'blankslate_widgets_init');
function blankslate_widgets_init()
{
register_sidebar( array (
'name' => __('Sidebar Widget Area', 'blankslate'),
'id' => 'primary-widget-area',
'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
'after_widget' => "</li>",
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );
}
function blankslate_custom_pings($comment)
{
$GLOBALS['comment'] = $comment;
?>
<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>"><?php echo comment_author_link(); ?></li>
<?php 
}
add_filter('get_comments_number', 'blankslate_comments_number');
function blankslate_comments_number($count)
{
if (!is_admin()) {
global $id;
$comments_by_type = &separate_comments( get_comments( 'status=approve&post_id=' . $id ) );
return count($comments_by_type['comment']);
} else {
return $count;
}
}
