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
define( 'DB_NAME', 'mysite1' );

/** Database username */
define( 'DB_USER', 'rooty1' );

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
define( 'AUTH_KEY',         'Tz2fEx3_hc(~vC|e_C/MH=j<nA2gmR0LS38%iQ&4AXd}:t6OZL2lh7>^;!&/O))K' );
define( 'SECURE_AUTH_KEY',  ',X7~?k(KnJ<Q(GJezIXx;J9nczK@Xp^RaZBGy+A)Roz9vSNu/dmbr^7` DPv0%CZ' );
define( 'LOGGED_IN_KEY',    'oxTY3e78>&UHCP #c))uh`-55;*+qKX918frn=uS(ZfPRwZZqnvkN!-vh9G9(N-&' );
define( 'NONCE_KEY',        ',G+W<GUnoS@~f|dwcD0)Z$:F`wqNPuSBL%D!=RF;s8{|[Q5{;peTpKo518_irC@6' );
define( 'AUTH_SALT',        '%AB`HAi i]lhl{]LNoHAII.{jNc07&ofhV $TGPJ]Q``jvDPCtBzB%RW5|5bTv7 ' );
define( 'SECURE_AUTH_SALT', 'ya%-u5[O?3Q}M8=(E-RF@/L^@Cn{T$Zn0TafY(CR]d(Np*|Tg2<Y{wIhrK:r/tRB' );
define( 'LOGGED_IN_SALT',   ':wuFYut%)nPBc#Pc3T{TW;pgr|_:Zos~IqiP+]A/{&HZ:;oWLaNe{EJbtF5v$X{X' );
define( 'NONCE_SALT',       '[OXH#X19OHO~%/*i.c#Z@&w}w}Uj+m4//_g_M3E0%m+;|`YA[mA`^go pX6j7n{w' );

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
