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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'test-wordpress_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
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
define( 'AUTH_KEY',         '3*&TVI9@m_!Dm anLd#0^m{?mC,{-pEQs>T8!/)HCWk>^!}Fy!t5/ySQM9;N>O3j' );
define( 'SECURE_AUTH_KEY',  'g^5/UrgBMn8kYp~ xn$p6QeD+x6PePFvn`_9OHIV%a7X__D$av]FTAvTF^~`2Syn' );
define( 'LOGGED_IN_KEY',    'cER[Zk3U:F=/4gA7@6-0Ji+{?dGt sZI{2zzbPJ%?Bh4N28<PJo*?C)sex?lA=]g' );
define( 'NONCE_KEY',        '5TO02al9a(-tzYU({x^_I(;Ku y.CG0Z/IQ?2xm`&R-V&CrfPj!i.L9stmnXED.E' );
define( 'AUTH_SALT',        '0?3I3*o?LFt:t2]&s$kSZKm88b{}W@~Be Mk&ZO4`/e?i9pRw~X$M4P:j^kq)~WA' );
define( 'SECURE_AUTH_SALT', '2)>*T*vVlCe8xN#c(4rr5xK&}mviyxtk>s.uz|2}W~<ylLp64?l?Kr2w!fg/b8sH' );
define( 'LOGGED_IN_SALT',   'yJW&MeB-ml,NAKb9Vd`bX_F]m>J)2:~r|tDz9*9_Z96g%:*,+;9{K`q}sx(a(o4k' );
define( 'NONCE_SALT',       'S`sE[|+7NS=TbIzGHQ[<lHI`By^A2!~EQYQhBN(vT*cj;I+vRWlz`}8xM3`E8pdz' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
