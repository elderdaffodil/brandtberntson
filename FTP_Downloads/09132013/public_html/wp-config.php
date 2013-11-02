<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'brandtbe_wrd1');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '9rsiIeANExv6RfbQp0iNYpZCqiJrv8Zhr4hwAqeVTcGCwBZdlIEw5PYPEtrcyZkW');
define('SECURE_AUTH_KEY',  '3nEOkbi3vKXNVxa7VqcOoKGwn59x96tOyehvipATb0TRdbSeQGpBjr0ImDWN8TA4');
define('LOGGED_IN_KEY',    '2kkcsT4q6IrcwlzjLcwlFXiqczVEeVZdumNnDUU53aHWDscFsiOrkjSiWDijFELY');
define('NONCE_KEY',        'gx4syKeHYufoGITSx8GropviE0RupqilXJV9oSvNfTHsI0BVXbc8IcEuUSflO9F5');
define('AUTH_SALT',        '4YLnhPDa0N0ONiV02RSprRB8d5kBERkBLhs5WGPKLaV2OoahRpvOkfu3IF98SOth');
define('SECURE_AUTH_SALT', 'dMkLkHUSu0vT8Oj69WyfAC5LLgKBUur2dyIR1o1ISbAUoAsBfUEoi7VFDYnYUwBm');
define('LOGGED_IN_SALT',   'IlvhSbI4t5A9JzjhoHxXPxCh3VcJ8KUkMw3818NwONHZzeDzEIH7Rm7Kan4JhTGz');
define('NONCE_SALT',       '24Y94MZWpa7n64n6p9s5wUMcJ9Gh7wEprBYWR89VnqObdvGOQp0TFVVV4sWuH9Bb');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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
define('WP_CACHE', true);
$currenthost = $_SERVER['HTTP_HOST'];
$mypos = strpos($currenthost, 'localhost');
if ($mypos === false) {
define('WP_HOME','http://www.brandtberntson.com');
define('WP_SITEURL','http://www.brandtberntson.com');
} else {
define('WP_HOME','http://localhost:8888');
define('WP_SITEURL','http://localhost:8888');
}
require_once(ABSPATH . 'wp-settings.php');
