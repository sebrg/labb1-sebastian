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
define( 'DB_NAME', 'labb1-sebastian' );

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
define( 'AUTH_KEY',         'Md&*+c!~-M5f~1Cj.tB]_7XCJEq,J|maYL0V6`=pvN%=<{XJrWe-g^dZ?IJp~3k_' );
define( 'SECURE_AUTH_KEY',  '[AnUJ<HlCZ!1I<Ba$NiLqgJoPKQ:GtsM6AN2se3/swvZwzF4XbP)9/F+Hsb4W&(i' );
define( 'LOGGED_IN_KEY',    '%g^trl94ZURYpA/yb~Awr2? esyJ77n:d{v+{jP*+Y~TjJ:qA^Uol,*F/CAK,Cci' );
define( 'NONCE_KEY',        ')H~oYvyIh~q0m[w]RdyjlW1HW c3QE)kNaI=U< zz= @X13! AQyb5T6x5)amm1^' );
define( 'AUTH_SALT',        '-[5pm}C/n; (+O~,~PRTPh.FMp_fX,?|rt2?-yRWbnWOJ[+!)pU6%<@-$rYkTLeL' );
define( 'SECURE_AUTH_SALT', 'J}0)A{o0V6!x2w7;,T:NNZFKOA+wupaO$51DzO =VD@JLxiM9.fDLaB$:{?x2MHF' );
define( 'LOGGED_IN_SALT',   'G6TAB]pY]+m,A<QH7@U58.RX4>D!@LusTYKh^^A:S?%>D!.ax 2d6HydO#(uQ3?%' );
define( 'NONCE_SALT',       '[`zZo3IM!$#ZJ)7oqGsd&D-_E4gTOS!/zCBiK2Ckb-WpDBVjK~suCtUj:|uf7z8b' );

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
