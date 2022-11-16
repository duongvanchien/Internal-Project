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
define( 'DB_NAME', 'pga_qa' );

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
define( 'AUTH_KEY',         'YK -E:W2K)x0$N-$Mx;-?{DA;y<BO9`6/g9iGoTL[ V ;f[|6ZPT!K[_|[5WL2$X' );
define( 'SECURE_AUTH_KEY',  'sIW@|^L|nV@o.CUlfOdH}8?+cyn|-U>E,`)Vy|m~Qm^{!=vS$S4 c%E&HrQ7)~?$' );
define( 'LOGGED_IN_KEY',    '4,k.%>~*8V[a(F@};WJhXco nS!3oa/Fo>%G!*$Ei1~r,aS3K{0.GKpW?H#f#q6{' );
define( 'NONCE_KEY',        'Bila e>fk4cRa&M]K$XKrY:xH_t.vu61+Gtj$ot?D=%P{[]7uAV70*_EyhB.l4Np' );
define( 'AUTH_SALT',        'Fgan&&Dw1IorepM=OiXNA3u7`qtQZ]N??.gC8wtv/H}#%$48x&}0nDWc^8_&G sL' );
define( 'SECURE_AUTH_SALT', '0Ly.9.vDsbIyJd)HCZE9u?dC&kV;KmrCqZaKZJe>^y(LGD,(#NSG:P RZ@A?oL!.' );
define( 'LOGGED_IN_SALT',   '*>r;~DA$Lpq8pfD~!#~-bd<@;%jg@R7z#0XokYG]8PX^A{ kRBVqf_k*G5JXRA#:' );
define( 'NONCE_SALT',       '7snQPAA##/Lf-Ikn[MBN>e)ALxWb$R: 4T:-y8C5n!4Q){KK_-V<FCSkB`Jka_-O' );

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
