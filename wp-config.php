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
define( 'DB_NAME', 'vicat_db2' );

/** MySQL database username */
define( 'DB_USER', 'vicat_db2' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Kuyaruadmin2021' );

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
define( 'AUTH_KEY',         'EbufPrFFh ZXFE%gzQB0~0nju~*Afi~/]w2Zsm{6/naGg7<}Do7:)FCR0c.nxbuJ' );
define( 'SECURE_AUTH_KEY',  's++-q^uH/_nB55OzucNc3XwtbuXq[ ytNSCVhrD0eG^Z&J6``DCR:Zw&7<E{j)Z<' );
define( 'LOGGED_IN_KEY',    's]&iD%^lab0MhrfJojFLFLDEHe }`i84aRKup?,,P,x5cVjTjj0# mV~4|R>m>k6' );
define( 'NONCE_KEY',        '*G*E9Cr_?(4*@h%)/Ain=LtJ>Rp5PO_9H!XcF~ VBF$gZAv,n?rS?fLty /dG/O^' );
define( 'AUTH_SALT',        '%Rm3~%e;hw=T+|,WMK1{I~7d*4U^^U;`E6CA/LE!~Dz/!-<V7WQS5S]tR_Mm }|p' );
define( 'SECURE_AUTH_SALT', '!b@S>,[=.o7z##FRY3S[X`nJb8?Qrs qpE6nPQXj:2oyzT8WIKNG^4O!]nGwr]|a' );
define( 'LOGGED_IN_SALT',   'oHDO5y2&[z-MGIbejTR_v%#+}>ab8Gv[^}l18g^ev8D)![zm6&@O$`)KeAUZp& (' );
define( 'NONCE_SALT',       ' G)Juw|:B,Js}8=159JHQsIP%Y.zRS@h`4lgVt6*7m-{SvArx;[>R,-j_%TUMH#0' );

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
