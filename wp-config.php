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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Rafael' );

/** MySQL database username */
define( 'DB_USER', 'Rafael' );

/** MySQL database password */
define( 'DB_PASSWORD', '24833108' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'I<CK/5Eqof2R&Lj8|ZA4ui)]Ua7&`n{xTf=2>mf=HT?9[*?-8[r=I=Dd0]DARka)' );
define( 'SECURE_AUTH_KEY',  'B7/7wl&d/tiS8:r`bwv81#{B?EkfqK4ns/p<153w0SWIy.Mqi>#SEw&>7^K}~vB]' );
define( 'LOGGED_IN_KEY',    '/t0NxmtoIiK-@g{A=Q(&K_D3ShyE}ZaeV`:Y>?)(9LewAB%<+r>g5`kDg%Dr^Ks6' );
define( 'NONCE_KEY',        '%-&Q?6D{`s@KV8Q^O $/+!?DKE9rgo(CE?M&Z#YSsxjK5W/O>[dmH$XQ]c3^yM1z' );
define( 'AUTH_SALT',        '^%C1tGXJ0E8ch1|} sZvQ#TN#GprtI@GBL,`<,5ZQ00{3|PEL;[12}>1JqWxIJbF' );
define( 'SECURE_AUTH_SALT', 'eq!8,O)31^!vOU}dhU~%fMtelAk?1a^WuCW3ZB/.3Hr:u TH$Ki@@{BHQ34X(V:.' );
define( 'LOGGED_IN_SALT',   '/t{I)$>T?m`sT$ :Y{/!N>9V771A7Vos(ZsrHAU-bx@K[?<5PrKhX@6~0]t/<Nl`' );
define( 'NONCE_SALT',       '#zdHy/ub{R/&hZl(%elBUIT !,E#>S3P[_GJY@IKTI$bhgcxwyD/:f!c`^wCZ)Ek' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

