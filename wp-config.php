<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
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
define( 'DB_NAME', 'onefwps' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '!L5QKfu^D/PpIt$,<>q.3Hg#/1Auvo^o0&l^1&6eRI9N5.fbX(#vMwcp$h,].*O&' );
define( 'SECURE_AUTH_KEY',  'YOTv/@;>C<WU<Ua}66l_*V>0A0Ah3k{>hdkx@S}L6yM:OH?Ur%qi6RN;fA%|gDAi' );
define( 'LOGGED_IN_KEY',    '}TROlm;!I?vg8bUjU$lPQ4h7(/YPxS9mqr|tc.=(i>LNdeXi[UWP;nUtWXb*o[XG' );
define( 'NONCE_KEY',        'V@YH,]xY $U;OcEO?6)T+n<$%/jBl`zF=FuT<ME%i#x]<{;/$S#5?lKk4TSL_ub]' );
define( 'AUTH_SALT',        'F(@guq!DpL;AEP%s;+w>z|HGh:,4y4ZXPh>[W+zW`e}Q+a0]-MPu!WDu:{d82]w!' );
define( 'SECURE_AUTH_SALT', '| *=p1O.j-48V]z,@yWx8>kKM9x (8hTm`2t~w:jH^5ALQRdbvz`~e/-NJ*|<M4+' );
define( 'LOGGED_IN_SALT',   'HYE5Y6R3t /5&..K9F+GQ5%JjJ8;NQAm)0}T`tO0]*q :Is1Mb,#b5mB1M&5 <Fq' );
define( 'NONCE_SALT',       'Na:GujLpE:wNC6wW!9b52UDyiMj*:4:Z f8z7GR&7$!wLfuL40=|mz`gcH7s0kfi' );

/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
