<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wp_database');

/** MySQL database username */
define('DB_USER', 'wordpress_user');

/** MySQL database password */
define('DB_PASSWORD', 'zjgi8;PNEIi1S#g');

/** MySQL hostname */
define('DB_HOST', 'wordpressins.ce2dx3jsh6cw.us-west-2.rds.amazonaws.com');

if(getenv('DB_NAME') ){
	define('DB_NAME', getenv('DB_NAME'));
	define('DB_USER', getenv('DB_USER'));
	define('DB_PASSWORD', getenv('DB_PASSWORD'));
	define('DB_HOST', getenv('DB_HOST'));
}

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Y(*yCb61IjlS4WFnqX*I`ri({X*~gc]9_wO<S8@tdA+wD(isEzE7 X&tXgfou%6.');
define('SECURE_AUTH_KEY',  'Pl,xedC/&p}|OLh?5A0I{TQ3Ymzw5w^~%.8:%/do5/Lp!SzuiUTY2 ^I#Y+6@2M9');
define('LOGGED_IN_KEY',    'aa[-p<>jqM,1_^{r1X6e?s8T %H<z+W7OZlL@NP R{1rW].9VJE2wE9Nt&B!7i{L');
define('NONCE_KEY',        '5`.I#8l~c7M1mA`Pf[B}^B@*QhE_WyM2Z?UnPv}h_ KhSloFut6p_DN24WQFTLc,');
define('AUTH_SALT',        '%P*wrDFLVj4Msie@,fom!i65</CFxW:eg!x;5wLw0j)E#-!=-Y9tswzw#yLKu&/p');
define('SECURE_AUTH_SALT', '*&CxTIrL.pR<6lwQzQpmj]fCFc?Bc.:Yg hf0V7b{(I-h`IMkkxyP<&Nms;9t)P.');
define('LOGGED_IN_SALT',   'kBhARQQUi=}nM@MY!3QPN{o)JZs]i+KQ4#9`3HqG5AtENfvt~D!IE}EL ,)6FBK6');
define('NONCE_SALT',       'Q1>jrj2OH?eT}#Y2vo[`!-U<4z.lSF&.pZ4LNr:>fW9+(qjW{Iu0M1e=9~H+Wm0:');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_8qjvkt_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
