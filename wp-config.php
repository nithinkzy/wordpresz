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
define( 'DB_NAME', 'lawfirm' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3306' );

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
define( 'AUTH_KEY',         '2-VG$Dm &UrR!$S?nA{nBYPiZ0}@}oK[K5I8]4]BlJu[THW|T9gML!Kyl=pV?/C ' );
define( 'SECURE_AUTH_KEY',  ':zqX<Nj81|u;J?hHBe{4}6T}njp6h7!Y%*-fEg;cNGkAUl~3;U`9CCV[c<HYkl2.' );
define( 'LOGGED_IN_KEY',    'PI2j-}L={GD/[f>|V-HKVPV~Z.&%hOoj:Mz^1,t17vkPZyBfIzcrx$sN}_VT>?@,' );
define( 'NONCE_KEY',        'NHsXEVL,v$E@!P.zc[T9ft#GRYMhzxWM<3^YNR577N7yV`={yQ9u$02jHlURj7`2' );
define( 'AUTH_SALT',        '2pF@VN[f9_PCP~p&Ks?yA?@ydYQ+>zH~!1h5js8^wQ/#jtdK2j!$L){Nm_m{yY^}' );
define( 'SECURE_AUTH_SALT', '1t}L6c*)!^@KM8#Tq7OV#2FGH)w)D&L!tlE3G+?~E`m,D3Yw0c hLbl2:`+eEy1z' );
define( 'LOGGED_IN_SALT',   'p+.dp/O$k4~c?I`^6}*F_@cAT nJ.fRgGwLB)0G6!a55~5%8/KTEdW),uJS&T*lo' );
define( 'NONCE_SALT',       'qX?W1]TTH/xePO:-0/~An/W=Tf51Cdt$3(aoi/oOn0sUwiBy%GF_9%5/<Tv4O|b+' );

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
