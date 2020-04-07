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
define( 'DB_NAME', 'wordpress_tmg' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'MC2.mysql' );

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
define( 'AUTH_KEY',         ':MG=uDjk.C.9FiTfMZt764gE.wM?zkJCa_%6<K{Q;N)hp[l!IXlD42EbU^(Iz2?]' );
define( 'SECURE_AUTH_KEY',  'y k5$)CJw}Dj`BJ6@FT|h&z Af~3cl($5 fMdpj+C(b,J.}O6C}=,VSAh)76t Jk' );
define( 'LOGGED_IN_KEY',    '/5|/D<Ac`t$_?INK$B|FrR>$Qroy90qBOJ}Em%Kvc.m]=Hc{{rH:$lrQf2{pr|!t' );
define( 'NONCE_KEY',        ';]zKsn3g&<49q6o/!66W Djw7=_aGf#[gqC5)Ay+`24EgMAa_AR1y!~>cxVQBDkI' );
define( 'AUTH_SALT',        '+B/z<4Q?jA|~L9K[gT0L5F9RQJ_@Z{mm^cj4I*QT?Le[uhaYnYFN&vyot`=$5zhx' );
define( 'SECURE_AUTH_SALT', '|bO?vD47t{vf:UXJ2c{3^$Z@ea{`Bb]g^G]>T3NnA]HJ$qBbX]<}0MC(q<~Y$reg' );
define( 'LOGGED_IN_SALT',   'eQE2KS.se>D|c,#rV$vmEa|{^l*?)q&;WVcEci5xVhgF4Qi~@Fz@8 fH$_/S.vX`' );
define( 'NONCE_SALT',       'oDoF=BE_ `oxT]37nd/GT!m8ov,hw?u=/%m56<BuKwL~yBGf@u2Zvvv*U(l3!Lh-' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'tmg_';

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
    define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/* WordPress的临时目录。*/
define('WP_TEMP_DIR', ABSPATH.'wp-content/tmp');

define("FS_METHOD", "direct");

define("FS_CHMOD_DIR", 0777);

define("FS_CHMOD_FILE", 0777);

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
