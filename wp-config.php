<?php
define('WP_CACHE', true);
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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define('DB_PASSWORD', '17e925ae0c93669e66fd70494b785705ae9ac778886f8ce4');

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'c0Xhyz}v6j~wj6U}OzsG9%U~o^vsYcg:@%rBZw>):CClA7-u>;s-m^o{?&,W>yLN');
define('SECURE_AUTH_KEY', 'c0Xhyz}v6j~wj6U}OzsG9%U~o^vsYcg:@%rBZw>):CClA7-u>;s-m^o{?&,W>yLN');
define('LOGGED_IN_KEY', 'c0Xhyz}v6j~wj6U}OzsG9%U~o^vsYcg:@%rBZw>):CClA7-u>;s-m^o{?&,W>yLN');
define('NONCE_KEY', 'c0Xhyz}v6j~wj6U}OzsG9%U~o^vsYcg:@%rBZw>):CClA7-u>;s-m^o{?&,W>yLN');
define('AUTH_SALT', 'c0Xhyz}v6j~wj6U}OzsG9%U~o^vsYcg:@%rBZw>):CClA7-u>;s-m^o{?&,W>yLN');
define('SECURE_AUTH_SALT', 'c0Xhyz}v6j~wj6U}OzsG9%U~o^vsYcg:@%rBZw>):CClA7-u>;s-m^o{?&,W>yLN');
define('LOGGED_IN_SALT', 'c0Xhyz}v6j~wj6U}OzsG9%U~o^vsYcg:@%rBZw>):CClA7-u>;s-m^o{?&,W>yLN');
define('NONCE_SALT', 'c0Xhyz}v6j~wj6U}OzsG9%U~o^vsYcg:@%rBZw>):CClA7-u>;s-m^o{?&,W>yLN');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
