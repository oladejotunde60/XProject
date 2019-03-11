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
define( 'DB_NAME', 'techbitc_wp553' );

/** MySQL database username */
define( 'DB_USER', 'techbitc_wp553' );

/** MySQL database password */
define( 'DB_PASSWORD', '(6CS9p8dp(' );

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
define( 'AUTH_KEY',         'akqvj3f73zn4g7xuxyexlw6i2cykflllhvjkrqvnfp9aax24qcegnry3xfgk2kpq' );
define( 'SECURE_AUTH_KEY',  'pxkmk3tner7mkjnurbbj6mbwfcg43sdrq3me2zjvf3xhbuxmpjil6ogl3jwz6gek' );
define( 'LOGGED_IN_KEY',    '3dny2jqiit2e5edf9uwnn4hggo7qfzpbazuui0ennzkb5v3nyapppz4xxmzl5yru' );
define( 'NONCE_KEY',        'wvkfgghxvfvjubcco6h9b80vlf8asrdamc9yncqmnwbp0woxbp9dmro0l9aj6yew' );
define( 'AUTH_SALT',        'mw2mgkd0uloyu1pxhz12rs3u7rieuufnmx4bfqjibvrgh87idask5mhjiurlfmwb' );
define( 'SECURE_AUTH_SALT', 'rvw6rj18pvbx9hcewurxsbewfwvobtjvlobcv09xgcmhz81w6ftzfehd0lf1qwfd' );
define( 'LOGGED_IN_SALT',   'hsl0z2r0znpiupjggufhrr2suu3wgmtxzcen9rqyhfasddqpuolvtmwxg4jwpvn1' );
define( 'NONCE_SALT',       'x2bmb401pixeacjmeadl6eif1jb3imh3pvlhwwbbprntmzekcnw5fyo3bjc2orr7' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpih_';

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

/* Multisite */
define( 'WP_ALLOW_MULTISITE', true );
define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', false);
define('DOMAIN_CURRENT_SITE', 'techbit.com.ng');
define('PATH_CURRENT_SITE', '/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
