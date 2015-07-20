<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'crowdfunding');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         '!IC&i`+qNbx3= f-r-91F[$y<B&!{w+Fal.5|#noC@(,-.Y8-.H!&q/ltmW?5!tN');
define('SECURE_AUTH_KEY',  'q]kzMF-!cLC>).LX*6Gj|I*OUyus/TAjcRZvU{uhnb:v+.z]hAY;L=#T={>PTX~m');
define('LOGGED_IN_KEY',    '9w)JS&ceA0ZNr46,Rx)Wyo_,D`cc3?8kJRN)VZDCg+RL{peEyNl7:zV;6+3,r}:4');
define('NONCE_KEY',        'RiggX:u|T` 5~1rWWA<P>c-pZ-.GD%P)s~0P^j]WxPS+(hq#)L*qe5YuFl*?)p+E');
define('AUTH_SALT',        'F:7(_rUvZcse/hKsK`qZY~M[DM}+{.kc0plwak-GVpy9ASj)h<0|Mo}us^6jl?]W');
define('SECURE_AUTH_SALT', 'BsO..()T}Li04;+$|cdbP8o?H3~gA7W>:pKsL_FJ{(&<yczdN9x|@Amak6Q5N`[]');
define('LOGGED_IN_SALT',   'YjeR1=Tl-8+W+k{ {Zj)eoUe$kDc&z)+w#__ KM{Sl7[udlbRER^+`$P@&{PLO2k');
define('NONCE_SALT',       '#vo0XUE$h!(b|iA-M-oF<bPUe|#-{kRa65|*LA2q5|iHIa&Ms+[9Nv/o>ZmP}{N~');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
