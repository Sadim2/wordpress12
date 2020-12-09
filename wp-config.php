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
define( 'DB_NAME', 'wordpress12_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'l;:%nK&HJ .G|&qeTPN0qm255^p~fYLPd:&$;BrMZXrF;F_kIWVt}:^:+H[r/S_$' );
define( 'SECURE_AUTH_KEY',  'A;Tg}AUx%k2Sy7abgGg52xPK?14}RdE;7LROiH}2i3qr&df-{frlUESI<5&,0WBb' );
define( 'LOGGED_IN_KEY',    'jRwoo!(H{9OzAfo+6ZZ _I2-Q&pjv!&-`ZMV|,5%>OB#?|a*kO28Vn)8,n7cQ`x/' );
define( 'NONCE_KEY',        '31w .V4nQLVJN|t1]EeeQ=uO-_[j`m dO5DDZe* juH74 O%Zyd_l3`A?Imf)%h9' );
define( 'AUTH_SALT',        'y*j37jFm)j+d.Mh5%>17}=@zfA23DN|2@p5mD`hPK; N($$xu09ow}b*-8@l>1K}' );
define( 'SECURE_AUTH_SALT', ' n(a/:YKwfe! Ix=ZI3a?dJjuu[W&1xxXJrl&;mlTE&Q{BAXS2EZcJ[pb[|ZVGLJ' );
define( 'LOGGED_IN_SALT',   'Mw9:;#d`oU}!;|HoB>h]{4|r|2Q+nV3X/;TR:/PMXs.DtTz@3fi9p:ecJyCNUMP3' );
define( 'NONCE_SALT',       '58]~>@|YDu,traTMLx.k%xdcZxz0tr(#UG*+6f8%pP,rB4Jj1O/B&-G 78$y@d+&' );

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
