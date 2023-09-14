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
define( 'DB_NAME', 'portfolio_db' );

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
define( 'AUTH_KEY',         'Gk-,Jc*g}mQwUc;Z{9A7>mWtXf&g8ybsrU+#*DGOTPeo>ZZP+FA9}hTAblGO2yP`' );
define( 'SECURE_AUTH_KEY',  '#}U*JxId*K_VFw=t?ED=sU9fGCZ8iKT?-2yK4 ( }@uEw_u4Co<amrn@a8Xy%>Ue' );
define( 'LOGGED_IN_KEY',    't-|TP|D>W-G*ztGg;U5Mo_oK*Kmxjfe2rq0]rJ,S@!%5K{^q<HGkX*.w/t[_PGo0' );
define( 'NONCE_KEY',        'RxeO^q~D9Fmx,-3:^@]nT}.E`&F{o#kcIF#4JrhT$-ki`4}4>!4h51lL(!Y#T&mZ' );
define( 'AUTH_SALT',        '3cm1HO:[<sB^bWBq_9j=YKvPub YLv%NC0+4;]gD7ed<%{0LT]Ykm-(UO!`V2]i?' );
define( 'SECURE_AUTH_SALT', 'p(Rht?p||F}t5SS898L%kY}+zFiauq:dy.QN( r_z!8DyrQyqsUOxWrEp$&kGWIO' );
define( 'LOGGED_IN_SALT',   'fS`H-Dor,a!d1fRPTwSUdz9X!+<S2KUyAA3ilU^LdsOa n[Q{d<2&%J3J/}2s;gD' );
define( 'NONCE_SALT',       ' r=gSqfQ}^b{0q8Bc,T8q96%Hrdv)Zph+SzuU2`2oqvV;kZ$:p:9$}JQv5=Z/pw#' );

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
