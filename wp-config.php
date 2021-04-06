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
define( 'DB_NAME', 'floxia' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         '{F#toVV}~]BBvWsfi$`v#S1[?|h[-i`BTf)YoVuyDhW[)^?c~f++I}lv6xT!w5/I' );
define( 'SECURE_AUTH_KEY',  'P$;TS7hoa87U h88EOYmIkDZn< G2:nD`FqC8 zS+T!lcV=~a>vm90juFn4}Gn}-' );
define( 'LOGGED_IN_KEY',    '&&t;Ey*vGlc/HWzpdM Dw9FxRk^9IW$Hhb_EUfWp.i8>3F[Yt((L^U7fa} cXpci' );
define( 'NONCE_KEY',        '5!Rs[l0X&Px Z19*O9&-fm[qv?[#_YGyT,eL6E>IDM;-4;z 7C%x B-nH4/`4b1O' );
define( 'AUTH_SALT',        '0$Jqa^:pJEtANMM(J/*~4ZM=SzQ=/9lD?Sm,9W)y-y>OL)-}Qhc.D;&tqX4uxhI#' );
define( 'SECURE_AUTH_SALT', '0YQod,R6*ZH41w>0<)+EiLkDzSv,eP9G%V2$g0bYT,W| 5P!!zO$lD2dGucyqJZk' );
define( 'LOGGED_IN_SALT',   '` 0_$v^~D`wDkg5hA7.-]6>JFf*PXkspB++(ts~>9G2W9Ne-}z:gXZYeR9k0*WJ[' );
define( 'NONCE_SALT',       ']yo#4~=Si=*q+-dd#fO?:d9qmY54~1.*e$<l@kV,7`r[.J)%d]5-{(t<uPj=&DTg' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'floxia_';

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
