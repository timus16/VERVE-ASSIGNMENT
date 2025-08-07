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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '`V$wXmn&fz^J/HDqk0tcn: 93fte}OUChnDDN?g9fGoyJ?wQ!GVSv:3-{@,~U/b1' );
define( 'SECURE_AUTH_KEY',   '[Bu#,p*{wu<VRWTCVl~lC<_G=G54j4%hoht)#n2ViR>-gdK}g5|>NdzwCHWcWf!i' );
define( 'LOGGED_IN_KEY',     'x4|]O*tV0nV#XcJ//cNSodcZ~~>vuXd1eWz/ZtOin8R}^mm 2{FlCo1KE5p>x[Qo' );
define( 'NONCE_KEY',         'D1(bSQR$@C!/!4SUKGl2)jX0zb87h0We0)aTp_]$M2?&QMa.VkDIM~o+6Q}oOuA4' );
define( 'AUTH_SALT',         '7x:;M^j^Go*(:a+dtU3EVpkaz<d`3<u (L0DN?!M^e&(b.r{.Dm`&!k66Vd*Lc[]' );
define( 'SECURE_AUTH_SALT',  ',YD H7>gBx_~$DvD,:B=.UnAW-{wB}VCfCi^9_8+asY9n?B/?SyhVhx`ROe0%Kb!' );
define( 'LOGGED_IN_SALT',    'i*<dd)~|7r}.| S. R$V#Li[{dzR,jjIXY8b:I_Z>d,a-9=wG~~0KcG98a(Lx:v5' );
define( 'NONCE_SALT',        'pmjjjd$kAVV;cKr4!ax1}^MM`&PXYI9#=%^:~yiZ:JeKo8yIlfC*-8J;BgP[aH8K' );
define( 'WP_CACHE_KEY_SALT', '!r%;A%/5kkTr0u[XzIdx*ZBck>t*:3_<$InlxHI%.4MfTH[h4T6S/Xuo5t.K#oU%' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', true );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
