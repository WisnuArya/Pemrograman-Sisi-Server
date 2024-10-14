<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_dp' );

/** Database username */
define( 'DB_USER', 'wordpress_user' );

/** Database password */
define( 'DB_PASSWORD', 'sandi_wordpress' );

/** Database hostname */
define( 'DB_HOST', 'mysql' );

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
define( 'AUTH_KEY',         '?.E*f5a:0,|~)IpU]U*[)hvtQAj@)2j/!Gf_4Q%ALWAzTYb`BQR]ppeTx?fFv%VK' );
define( 'SECURE_AUTH_KEY',  '_cvvmpQ) ]xAQc}7h9f0YU:F4KNNV~4=0;0>m5Uqz;!Yf5@7/0Pa/4ky^8I>s{6S' );
define( 'LOGGED_IN_KEY',    'i5:bX_C@4:iD<08ztC&6p9|noQqvw+IrG%K?)}Ei}PUy_Tp3I ti#OX;QT]r81]F' );
define( 'NONCE_KEY',        ' )3Qi2r ex67.ET`yV~pk+1NgVdGz2Tmo5]drt{_l&cr%L7ZC|U`>IC)gyr&$<:c' );
define( 'AUTH_SALT',        'jtSi7]UVCrr11ffH+8bvM@l7XS[Wd]]FG#Q;4y}QIKN?}@Ny!XosA(FNBo{9/L%w' );
define( 'SECURE_AUTH_SALT', 'cTaIMNleT0s#Ir#h1saZBC3UF8ud<:(0P^RlWB%I/qvnl[pR[<8z/!3I? ErIy[Y' );
define( 'LOGGED_IN_SALT',   '#1]dR%ju97n1BK]@Sd0m2|w{hS5Av*JvN(N/mVvrHc@X9 Q=F49an.@YJagM5Pma' );
define( 'NONCE_SALT',       '/66%9h&H;WzHs,3r8|t.Q&cCdRYiIkvtpm![8[}iZ:f].a,K-^&hMcqm):A]m4YG' );
define( 'WP_REDIS_HOST', 'redis-server' );
define( 'WP_REDIS_PORT', 6379 );
define( 'WP_REDIS_PREFIX', 'dolanan' );
define( 'WP_REDIS_DATABASE', 0 ); // 0-15
define( 'WP_REDIS_TIMEOUT', 1 );
define( 'WP_REDIS_READ_TIMEOUT', 1 );
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
