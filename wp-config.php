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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'VH$#5Pji:b|qf((cTF8jDi4ePv^4M~[5S:k<F2gX]Yq7GeRxa]^4@a1Q/Rot4P%f' );
define( 'SECURE_AUTH_KEY',  'q&{a:W$IY~;/?i-z`qL8I;97RIF&oi4t<D5^E&pI7eXs-ZXFW]V0Ld.T1jkhgOU$' );
define( 'LOGGED_IN_KEY',    '!L2<?>8DTBcWdg420:M*`YU3#WjyIgvps@ho^I(HS{$t{1^qd/Y#V__;,~W#W1nG' );
define( 'NONCE_KEY',        'yg;7z?o4iLYMnC82#v6|nl|3khwYpbha}De=(Tq{4nJ@}7]g&)bF[xWA[4m&^#dq' );
define( 'AUTH_SALT',        'ts-L1oloqK{6/fcl%R[#?-o3,vwS3$Z]27oN9dI*w @;,QZ];)nyEbUSvai$[Ck3' );
define( 'SECURE_AUTH_SALT', 'rJ]9^*!w8d @??t%E^5Du=(WvMBu#IG;|S7._;cqpbHp<mXT(}~=B_g^I#d&>F^.' );
define( 'LOGGED_IN_SALT',   '?$[N_ iy$z^TckUJ?o&b^ZorP3MmX7w:^cLGU#_D4][#}6$lmnFs2`mPWHb ^k*e' );
define( 'NONCE_SALT',       'z-uA|=1j;n7ykf5%.m&Bp9IcO-WU2JRq0HXU*(?~:DQ)P5Va67iM2{:(!g/m(dFa' );

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
