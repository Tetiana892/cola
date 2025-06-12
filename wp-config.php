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
define( 'DB_NAME', 'cola2' );

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
define( 'AUTH_KEY',         '5YKrwB=%5?o$hv!/S|;~7XOuA#Dl6,)_#m!|TU_<e7.V{2/s7`5JB>hbi[E(.zc9' );
define( 'SECURE_AUTH_KEY',  '7%zM%y;4k;G(AdH}*Bkwo@Bh!95ni2,hHh7H~;mteQuQv1T}0a63(!Und_UHfm:J' );
define( 'LOGGED_IN_KEY',    'TWT/.C1^*P}^U(qF;BE=a[1-lrb@JW0SzYjz!Sp7qc>y]SKLD(ZfzP.zgthh%Mc7' );
define( 'NONCE_KEY',        't]DIq0/OQL=Jd5^YPlI)x2Yvd%oH>f b=f-KBj;J6)|tq(,A>H{KukfD2v(2Qni`' );
define( 'AUTH_SALT',        '~37+]GdH? ]X?[z:5ak6?,.8Wv5t i;lpv1,Z3lnO3;Dvj3{Wj91$je$D:lD4afP' );
define( 'SECURE_AUTH_SALT', ')NEAga#LqdY`IoPf#:V~AZrp(Uk=y|. ,oGIT+]X7z#_j8}xdp%Zg]qd;CK/>;AX' );
define( 'LOGGED_IN_SALT',   '1K}%@8BGx:%%cu2yiezbU,m~~OEaGl0Lgqj0E%K$^?2pe,^RNj(O~nky FJ?3|0<' );
define( 'NONCE_SALT',       'I4hUR?*mc0g@mv(Q% C93ob7Ux[9,/bPSXI|4q!/X1Pk;=#XD{Vx)DHE!]=w7XR`' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'col_';

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
