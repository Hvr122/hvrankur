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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'hvrankur_db' );

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
define( 'AUTH_KEY',         ':kP+ftWfv~a2|}a*2t}pY>wzYh+oWAW,+?[| ]T_Q!o0J|IA$4=K#Egu6bg==g0b' );
define( 'SECURE_AUTH_KEY',  '`FF:i;.)6EW1,o`D~%f1bW>)Gn`Q?^K %>I_YN%8uE]o5l&}V#qbbIY}>OGaJz>@' );
define( 'LOGGED_IN_KEY',    '*0z#Zq~H=Z58[5c@n>$f()[<N^Ok<Fr:1X/,lMQSaf!XVOedn b9=tlldc@mk1M]' );
define( 'NONCE_KEY',        '1k(SFd4$aA[b{5_n,9=VO,.lL]H655Ije7Y;  =`,LrB4fVl(S/.@Bni1uzL?((?' );
define( 'AUTH_SALT',        '=`R3+DD,e;*c<J>qqyFd7t9nW24(@A5_PRnX@soQA4xB@1YG%y@gN4U!1.%F1Cz9' );
define( 'SECURE_AUTH_SALT', 'n%X#LYXwM4F4McB.[|3cY#kWL?qB[ZY<bgNb4:}XU:qWuV!Igln0:ua26%r5)#-~' );
define( 'LOGGED_IN_SALT',   '9==E=1xGY{;x#*]Y/Z]~M}Car.K%NK)dA78J,0V:}yrl</5}xU~<TC+a(~+CG,j1' );
define( 'NONCE_SALT',       'I&<nMy#c$U7Rm}+zq3u96=&AaO1droAUQ_#F:+&)^{SyM(FQD*4kK=>x{E6(iVlo' );

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
